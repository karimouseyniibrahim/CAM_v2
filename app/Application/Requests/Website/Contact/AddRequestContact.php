<?php

namespace App\Application\Requests\Website\Contact;

use Illuminate\Foundation\Http\FormRequest;

class AddRequestContact extends FormRequest
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
            'name' => 'required|min:5|max:191',
            'email' => 'required|min:5|max:191|email',
<<<<<<< HEAD
=======
            //'subject' => 'required|min:5|max:191',
>>>>>>> c7615468c7d7ae222b9647536e03087704b9387f
            'message'=> 'required|min:5|max:500'
        ];
    }
}
