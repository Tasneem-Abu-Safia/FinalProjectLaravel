<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class CategoriesCreateRequest extends FormRequest
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
            'title' => 'required|String',
            'description' => 'required|String',
            'src_photo' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'title.String' => 'Title should be string',
            'description.required' => 'description is required',
            'description.String' => 'description should be text',
            'src_photo.required' => 'Photo is required',

        ];
    }
}
