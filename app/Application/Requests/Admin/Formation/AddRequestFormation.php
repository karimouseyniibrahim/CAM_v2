<?php

namespace App\Application\Requests\Admin\Formation;

use Illuminate\Foundation\Http\FormRequest;

class AddRequestFormation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "libelle.*" => "required",
			"description.*" => "nullable",
			"image" => "required|image",
			"price" => "required",
			"debut_formation" => "required",
			"fin_formation" => "required",
			
        ];
    }
}
