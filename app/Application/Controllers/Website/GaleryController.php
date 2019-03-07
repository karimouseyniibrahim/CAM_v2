<?php

namespace App\Application\Controllers\Website;

use App\Application\Controllers\AbstractController;
use Alert;
use App\Application\Model\Galery;
use App\Application\Requests\Website\Galery\AddRequestGalery;
use App\Application\Requests\Website\Galery\UpdateRequestGalery;

class GaleryController extends AbstractController
{

     public function __construct(Galery $model)
     {
        parent::__construct($model);
     }

     public function index(){
        $items = $this->model;

        if(request()->has('from') && request()->get('from') != ''){
            $items = $items->whereDate('created_at' , '>=' , request()->get('from'));
        }

        if(request()->has('to') && request()->get('to') != ''){
            $items = $items->whereDate('created_at' , '<=' , request()->get('to'));
        }

			if(request()->has("name") && request()->get("name") != ""){
				$items = $items->where("name","like", "%".request()->get("name")."%");
			}

			if(request()->has("description") && request()->get("description") != ""){
				$items = $items->where("description","like", "%".request()->get("description")."%");
			}

			if(request()->has("images") && request()->get("images") != ""){
				$items = $items->where("images","=", request()->get("images"));
			}



        $items = $items->paginate(env('PAGINATE'));
        return view('website.galery.index' , compact('items'));
     }

     public function show($id = null){
         return $this->createOrEdit('website.galery.edit' , $id);
     }

     public function store(AddRequestGalery $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('galery');
     }

     public function update($id , UpdateRequestGalery $request){
          $item = $this->storeOrUpdate($request, $id, true);
return redirect()->back();

     }

     public function getById($id){
         $fields = $this->model->findOrFail($id);
         return $this->createOrEdit('website.galery.show' , $id , ['fields' =>  $fields]);
     }

     public function destroy($id){
         return $this->deleteItem($id , 'galery')->with('sucess' , 'Done Delete Galery From system');
     }


}
