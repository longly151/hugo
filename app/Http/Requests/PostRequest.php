<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'   => [
                'required',
                'min:3',
            ],
            'content' => [
                'required',
                'min:3',
            ],
        ];
    }
    public function messages()
    {
        return [
            'title.required'   =>    'Title cannot be blank',
            'title.min'        =>    'Title must be at least 3 characters',

            'content.required'   =>    'Content cannot be blank',
            'content.min'        =>    'Content must be at least 3 characters',
        ];
    }
    public function filters()
    {
        return [
            'title'=>'trim',
            'content'=>'trim|escape|strip_tags',
        ];
    }
    // public function withValidator($validator) {
    //     $validator->after(function ($validator) {
            
    //     });
    // }
}
