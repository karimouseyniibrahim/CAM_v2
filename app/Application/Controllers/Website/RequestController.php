<?php

namespace App\Application\Controllers\Website;

use App\Application\Controllers\AbstractController;
use Alert;
use App\Application\Model\Request;
use App\Application\Requests\Website\Request\AddRequestRequest;
use App\Application\Requests\Website\Request\UpdateRequestRequest;

class RequestController extends AbstractController
{

     public function __construct(Request $model)
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

			if(request()->has("artisan_id") && request()->get("artisan_id") != ""){
				$items = $items->where("artisan_id","=", request()->get("artisan_id"));
			}

			if(request()->has("section_id") && request()->get("section_id") != ""){
				$items = $items->where("section_id","=", request()->get("section_id"));
			}

			if(request()->has("local_id") && request()->get("local_id") != ""){
				$items = $items->where("local_id","=", request()->get("local_id"));
			}

			if(request()->has("status") && request()->get("status") != ""){
				$items = $items->where("status","=", request()->get("status"));
			}



        $items = $items->paginate(env('PAGINATE'));
        return view('website.request.index' , compact('items'));
     }

     public function show($id = null){
         return $this->createOrEdit('website.request.edit' , $id);
     }

     public function store(AddRequestRequest $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('request');
     }

     public function update($id , UpdateRequestRequest $request){
          $item = $this->storeOrUpdate($request, $id, true);
return redirect()->back();

     }

     public function getById($id){
         $fields = $this->model->findOrFail($id);
         return $this->createOrEdit('website.request.show' , $id , ['fields' =>  $fields]);
     }

     public function destroy($id){
         return $this->deleteItem($id , 'request')->with('sucess' , 'Done Delete Request From system');
     }


}
