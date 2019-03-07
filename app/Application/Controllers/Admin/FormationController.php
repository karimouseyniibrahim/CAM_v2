<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Formation\AddRequestFormation;
use App\Application\Requests\Admin\Formation\UpdateRequestFormation;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\FormationsDataTable;
use App\Application\Model\Formation;
use Yajra\Datatables\Request;
use Alert;

class FormationController extends AbstractController
{
    public function __construct(Formation $model)
    {
        parent::__construct($model);
    }

    public function index(FormationsDataTable $dataTable){
        return $dataTable->render('admin.formation.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.formation.edit' , $id);
    }

     public function store(AddRequestFormation $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('admin/formation');
     }

     public function update($id , UpdateRequestFormation $request){
          $item = $this->storeOrUpdate($request, $id, true);
return redirect()->back();

     }


    public function getById($id){
        $fields = $this->model->findOrFail($id);
        return $this->createOrEdit('admin.formation.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/formation')->with('sucess' , 'Done Delete formation From system');
    }

    public function pluck(\Illuminate\Http\Request $request){
        return $this->deleteItem($request->id , 'admin/formation')->with('sucess' , 'Done Delete formation From system');
    }

}
