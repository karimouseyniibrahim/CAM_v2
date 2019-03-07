<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Galery\AddRequestGalery;
use App\Application\Requests\Admin\Galery\UpdateRequestGalery;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\GalerysDataTable;
use App\Application\Model\Galery;
use Yajra\Datatables\Request;
use Alert;

class GaleryController extends AbstractController
{
    public function __construct(Galery $model)
    {
        parent::__construct($model);
    }

    public function index(GalerysDataTable $dataTable){
        return $dataTable->render('admin.galery.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.galery.edit' , $id);
    }

     public function store(AddRequestGalery $request){
        
        

        $item =  $this->storeOrUpdate($request , null , true);

          return redirect('admin/galery');
     }

     public function update($id , UpdateRequestGalery $request){
          $item = $this->storeOrUpdate($request, $id, true);
          return redirect()->back();

     }


    public function getById($id){
        $fields = $this->model->findOrFail($id);
        return $this->createOrEdit('admin.galery.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/galery')->with('sucess' , 'Done Delete galery From system');
    }

    public function pluck(\Illuminate\Http\Request $request){
        return $this->deleteItem($request->id , 'admin/galery')->with('sucess' , 'Done Delete galery From system');
    }

}
