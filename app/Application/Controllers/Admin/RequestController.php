<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Request\AddRequestRequest;
use App\Application\Requests\Admin\Request\UpdateRequestRequest;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\RequestsDataTable;
use App\Application\Model\RequestLocal;

use Yajra\Datatables\Request;
use Alert;

class RequestController extends AbstractController
{
    public function __construct(RequestLocal $model)
    {
        parent::__construct($model);
    }

    public function index(RequestsDataTable $dataTable){
       // dd($dataTable);
        return $dataTable->render('admin.request.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.request.edit' , $id);
    }

     public function store(AddRequestRequest $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('admin/request');
     }

     public function update($id , UpdateRequestRequest $request){
          $item = $this->storeOrUpdate($request, $id, true);
return redirect()->back();

     }


    public function getById($id){
        $fields = $this->model->findOrFail($id);
        return $this->createOrEdit('admin.request.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/request')->with('sucess' , 'Done Delete request From system');
    }

    public function pluck(\Illuminate\Http\Request $request){
        return $this->deleteItem($request->id , 'admin/request')->with('sucess' , 'Done Delete request From system');
    }
    public function validation(\Illuminate\Http\Request $request){
            
        $infos="";
        if($request->status==1){
            $local=$this->model->where(['local_id'=>$request->local_id,"status"=>1])->count();
            if($local ==0 ){                    
                
                $item = $this->storeOrUpdate($request, $request->id, true);
                $infos=trans('request.validate-request'); 
            }else{
                $infos=trans('request.validate-refuse');                    
            }
        }else{
            $item = $this->storeOrUpdate($request, $request->id, true);
            $infos=trans('request.validate-no-request');
        }    
        Alert::success($infos, trans('request.validate'));
    return redirect()->back();    
}
}
