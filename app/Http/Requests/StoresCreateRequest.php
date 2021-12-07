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
            'name' => 'required|String',
            'address' => 'required|String',
             'phone' => 'required',
            'category_id' => 'required',
            'src_logo' => 'required',

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
            'src_logo.required' => 'Photo is required',

        ];
    }
}
