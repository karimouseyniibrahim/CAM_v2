<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Section\AddRequestSection;
use App\Application\Requests\Admin\Section\UpdateRequestSection;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\SectionsDataTable;
use App\Application\Model\Section;
use Yajra\Datatables\Request;
use Alert;

class SectionController extends AbstractController
{
    public function __construct(Section $model)
    {
        parent::__construct($model);
    }

    public function index(SectionsDataTable $dataTable){
        return $dataTable->render('admin.section.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.section.edit' , $id);
    }

     public function store(AddRequestSection $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('admin/section');
     }

     public function update($id , UpdateRequestSection $request){
          $item = $this->storeOrUpdate($request, $id, true);
return redirect()->back();

     }


    public function getById($id){
        $fields = $this->model->findOrFail($id);
        return $this->createOrEdit('admin.section.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/section')->with('sucess' , 'Done Delete section From system');
    }

    public function pluck(\Illuminate\Http\Request $request){
        return $this->deleteItem($request->id , 'admin/section')->with('sucess' , 'Done Delete section From system');
    }

}
