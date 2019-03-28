<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'content' => [
                'required',
                'min:3',
            ],
        ];
    }
    public function messages()
    {
        return [
            'content.required'   =>    'Content cannot be blank',
            'content.min'        =>    'Content must be at least 3 characters',
        ];
    }
    public function filters()
    {
        return [
            'content'=>'trim|escape|strip_tags',
        ];
    }
}
