<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
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
            'name'=> [
                'required',
                Rule::unique('tags','name')->ignore($this->id)
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required'   => 'Tag cannot be blank',
            'name.unique'   => 'Tag already exists',
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
            'name'=>'trim',
        ];
    }
    public function withValidator($validator) {
        $validator->after(function ($validator) {
            if (Tag::withTrashed()->where([['id','!=',$this->id],'url'=>str_slug($this->name)])->first()){
                $validator->errors()->add('name','Tag already exists due to duplicate url');
            }
        });
    }
}
