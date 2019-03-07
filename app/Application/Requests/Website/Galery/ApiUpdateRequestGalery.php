<?php

namespace App\Application\Requests\Website\Galery;

use Illuminate\Support\Facades\Route;

class ApiUpdateRequestGalery
{
    public function rules()
    {
        $id = Route::input('id');
        return [
            "name" => "requireddescription.*",
			"images" => "image:500",
			
        ];
    }
}
