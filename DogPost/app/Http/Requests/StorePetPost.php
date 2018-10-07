<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePetPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       return [
            'pet_type' => 'bail|required',
            'pet_name' => 'bail|required',
            'pet_age' => 'bail|required|min:0|max:30',
            'pet_description' => 'bail|required',
            'pet_addressLine1' => 'bail|required',
            'pet_addressLine2' => 'bail|required',
            'pet_city' => 'bail|required',
            'pet_state' => 'required',
            'pet_country' => 'required'ad
       ];
    }
}
