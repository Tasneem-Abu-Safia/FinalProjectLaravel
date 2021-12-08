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
            'title' => 'required|String|min:5',
            'description' => 'required|String|min:10',
            'src_photo' => 'image',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'title.String' => 'Title should be string',
            'title.min:5' => 'The title must be at least 5 characters',
            'description.required' => 'description is required',
            'description.String' => 'description should be text',
            'description.min:10' => 'The description must be at least 10 characters.',
            'src_photo.image' => 'src_photo Must be an image',


        ];
    }
}
