<?php

namespace App\Application\Controllers\Website;

use App\Application\Controllers\AbstractController;
use Alert;
use App\Application\Model\Formation;
use App\Application\Requests\Website\Formation\AddRequestFormation;
use App\Application\Requests\Website\Formation\UpdateRequestFormation;
 
class FormationController extends AbstractController
{

     public function __construct(Formation $model)
     {
        parent::__construct($model);
     }

     public function index(){
        $items = $this->model;

        if(request()->has("libelle") && request()->get("libelle") != ""){
            $items = $items->where("libelle","like", "%".request()->get("libelle")."%");
        }

        $items = $items->paginate(env('PAGINATE'));
        return view('website.formation.index' , compact('items'));
    }

    public function getById($id){
        $fields = $this->model->findOrFail($id);
        $items = $this->model;
        $items = transformSelect(Formation::pluck('libelle', 'id')->all());
        return $this->createOrEdit('website.formation.show' , $id , ['data' => $items, 'fields' =>  $fields]);
    }

}