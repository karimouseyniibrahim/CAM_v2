<?php

namespace App\Application\Controllers\Api;


use App\Application\Controllers\Controller;
use App\Application\Model\Galery;
use App\Application\Transformers\GaleryTransformers;
use App\Application\Requests\Website\Galery\ApiAddRequestGalery;
use App\Application\Requests\Website\Galery\ApiUpdateRequestGalery;

class GaleryApi extends Controller
{
    use ApiTrait;
    protected $model;

    public function __construct(Galery $model)
    {
        $this->model = $model;
        /// send header Authorization Bearer token
        /// $this->middleware('authApi')->only();
    }

    public function add(ApiAddRequestGalery $validation){
         return $this->addItem($validation);
    }

    public function update($id , ApiUpdateRequestGalery $validation){
        return $this->updateItem($id , $validation);
    }

    protected function checkLanguageBeforeReturn($data , $status_code = 200, $paginate = [])
    {
       if (request()->has('lang') && request()->get('lang') == 'ar') {
            return response(apiReturn(GaleryTransformers::transformAr($data) + $paginate), $status_code);
        }
        return response(apiReturn(GaleryTransformers::transform($data) + $paginate), $status_code);
    }

}
