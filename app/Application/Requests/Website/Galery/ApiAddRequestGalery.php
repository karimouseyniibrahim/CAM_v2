<?php

namespace App\Application\Requests\Website\Galery;


class ApiAddRequestGalery
{
    public function rules()
    {
        return [
            "name" => "requireddescription.*",
			"images" => "image:500",
			
        ];
    }
}
