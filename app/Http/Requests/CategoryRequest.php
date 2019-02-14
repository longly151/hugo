<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\TopCategory;
use App\Category;
use App\SubCategory;
class CategoryRequest extends FormRequest
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
            'name'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'   => 'Category name cannot be blank',
        ];
    }
    public function filters()
    {
        return [
            'name'=>'trim',
        ];
    }
    public function withValidator($validator) {
        $validator->after(function ($validator) {
            if ($this->topCategory == "0"){
                if (TopCategory::where([['id','!=',$this->id],'url'=>str_slug($this->name)])->first()){
                    $validator->errors()->add('name','Top Category already exists');
                }
            } else {
                if($this->category == "0"){
                    if (Category::where([['id','!=',$this->id],'url'=>str_slug($this->name),'parent_id'=>$this->topCategory])->first()){
                        $validator->errors()->add('name','Category already exists');
                    }
                }
                else {
                    if (SubCategory::where([['id','!=',$this->id],'url'=>str_slug($this->name),'parent_id'=>$this->category])->first()){
                        $validator->errors()->add('name','Sub Category already exists');
                    }
                }
            }
        });
    }
}
