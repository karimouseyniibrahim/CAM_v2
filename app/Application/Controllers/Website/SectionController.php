<?php

namespace App\Application\Controllers\Website;

use App\Application\Controllers\AbstractController;
use Alert;
use App\Application\Model\Section;
use App\Application\Model\Local;
use App\Application\Requests\Website\Section\AddRequestSection;
use App\Application\Requests\Website\Section\UpdateRequestSection;
use App\Application\Repository\InterFaces\LocalInterface;

class SectionController extends AbstractController
{

    protected $localInterface;

     public function __construct(Section $model,  LocalInterface $localInterface)
     {
        parent::__construct($model);
        $this->localInterface=$localInterface;
     }

     public function index(){
        $items = $this->model;

        if(request()->has("name") && request()->get("name") != ""){
            $items = $items->where("name","like", "%".request()->get("name")."%");
        }

        $data=['data' => $this->localInterface->getRequestById(null)];
        $items = $items->paginate(env('PAGINATE'));
        return view('website.section.index' , compact('data','items'));
     }

     public function show($id = null){
         return $this->createOrEdit('website.section.edit' , $id);
     }

     public function store(AddRequestSection $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('section');
     }

     public function update($id , UpdateRequestSection $request){
          $item = $this->storeOrUpdate($request, $id, true);
return redirect()->back();

     }

     public function getById($id){
         $fields = $this->model->findOrFail($id);
         $locaux = Local::where('section_id', $id)->get();
         $data=$this->localInterface->getRequestById($id);
         return $this->createOrEdit('website.section.show' , $id , compact('data','locaux','fields'));
     }

     public function destroy($id){
         return $this->deleteItem($id , 'section')->with('sucess' , 'Done Delete Section From system');
     }
     public function locaux($id){
        return $locaux = Local::where('section_id', $id)->get();
    }
}