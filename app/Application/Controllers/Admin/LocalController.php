<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Local\AddRequestLocal;
use App\Application\Requests\Admin\Local\UpdateRequestLocal;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\LocalsDataTable;
use App\Application\Model\Local;
use App\Application\Model\Section;
use Yajra\Datatables\Request;
use Alert;

class LocalController extends AbstractController
{ 
    public function __construct(Local $model)
    {
        parent::__construct($model);
    }

    public function index(LocalsDataTable $dataTable){
        return $dataTable->render('admin.local.index');
    }

    public function show($id = null){
        $sections = transformSelect(Section::pluck('name','id')->all());
        return $this->createOrEdit('admin.local.edit' , $id, ['sections' => $sections]);
    }

     public function store(AddRequestLocal $request){
          $item =  $this->storeOrUpdate($request , null , true);
          File::move(public_path().'/files/'.$item->image,public_path().'/files/Local/'.$item->$id.'/'.$item->image);
          return redirect('admin/local');
     }

     public function update($id , UpdateRequestLocal $request){
        if($request->hasfile('image'))
        { 
        $l=$this->model->find($id);            
            $tr= File::delete(public_path().'/files/Local/'.$id.'/'.$l->image);           
        } 
          $item = $this->storeOrUpdate($request, $id, true);
          if($request->hasfile('image'))
          {            
             File::move(public_path().'/files/'.$item->image,public_path().'/files/Local/'.$id.'/'.$item->image);                        
         } 

        return redirect()->back();

     }


    public function getById($id){
        $fields = $this->model->findOrFail($id);
        return $this->createOrEdit('admin.local.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        File::deleteDirectory(public_path().'/files/Local/'.$id);
        return $this->deleteItem($id , 'admin/local')->with('sucess' , 'Done Delete local From system');
    }

    public function pluck(\Illuminate\Http\Request $request){
        return $this->deleteItem($request->id , 'admin/local')->with('sucess' , 'Done Delete local From system');
    }

}
