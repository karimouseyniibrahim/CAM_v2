<?php
namespace App\Application\Repository\Eloquent;

 
use App\Application\Model\Section;
use App\Application\Model\Local;
use App\Application\Repository\InterFaces\LocalInterface;


class LocalEloquent extends AbstractEloquent implements LocalInterface{

    public function __construct(Local $local)
    {
        $this->model = $local;
    }



public function getRequestById($id){

        $sections=transformSelect(Section::pluck('name','id')->all());        
        $locaux=[];
        if ($id!=null) {

            $item=$this->model->find($id);
            $locaux=transformSelect(Local::where('section_id',$item->section_id)->pluck('name','id')->all());
            
        }        

        return $data=[
            'sections'=>$sections,
            'locaux'=>$locaux
        ];
    }

}