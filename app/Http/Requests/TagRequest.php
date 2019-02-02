<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Tag;
class TagRequest extends BaseFormRequest
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
            'name'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'   => 'Tag cannot be blank',
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            'name'=>'trim|lowercase',
        ];
    }
    public function withValidator($validator) {
        $validator->after(function ($validator) {
            if (Tag::where('url',str_slug($this->name))){
                $validator->errors()->add('name', 'Tag already exists');
            }
        });
    }
}
