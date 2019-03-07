<?php

namespace App\Application\Controllers\Api;


use App\Application\Controllers\Controller;
use App\Application\Model\Section;
use App\Application\Transformers\SectionTransformers;
use App\Application\Requests\Website\Section\ApiAddRequestSection;
use App\Application\Requests\Website\Section\ApiUpdateRequestSection;

class SectionApi extends Controller
{
    use ApiTrait;
    protected $model;

    public function __construct(Section $model)
    {
        $this->model = $model;
        /// send header Authorization Bearer token
        /// $this->middleware('authApi')->only();
    }

    public function add(ApiAddRequestSection $validation){
         return $this->addItem($validation);
    }

    public function update($id , ApiUpdateRequestSection $validation){
        return $this->updateItem($id , $validation);
    }

    protected function checkLanguageBeforeReturn($data , $status_code = 200, $paginate = [])
    {
       if (request()->has('lang') && request()->get('lang') == 'ar') {
            return response(apiReturn(SectionTransformers::transformAr($data) + $paginate), $status_code);
        }
        return response(apiReturn(SectionTransformers::transform($data) + $paginate), $status_code);
    }

}
