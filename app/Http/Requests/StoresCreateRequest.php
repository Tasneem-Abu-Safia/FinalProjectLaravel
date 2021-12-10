<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoresCreateRequest extends FormRequest
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
            'name' => 'required|String|min:4',
            'address' => 'required|String|min:10',
             'phone' => 'required|regex:/^\+[0-9]{3} [0-9]{2} [0-9]{3} [0-9]{4}$/',
            'category_id' => 'required',


        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.String' => 'Name should be string',
            'address.required' => 'Address is required',
            'address.String' => 'Address should be string',
            'phone.required' => 'phone is required',
            'category_id.required' => 'category_id is required',

        ];
    }
}
