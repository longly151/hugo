<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserPasswordRequest extends BaseFormRequest
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

            'password' => 'required|min:3|max:32|different:oldPassword',
            'rePassword' => [
                'required',
                'regex:/^([\w!@#$%\^&*()-_+={}|:;"\'<>,.\/\? ])+$/i',
                'same:password',
            ],
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Password cannot be blank',
            'password.min' => 'Password must be at least 3 characters',
            'password.max' => 'Password cannot exceed 32 characters',
            'password.different' => 'Your password doesn\'t change',
            'password.regex' => 'Invalid Password',
            

            'rePassword.required' => 'Please re-enter the password',
            'rePassword.same' => 'Password does not match',
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
            //
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!Auth::attempt(['username'=>session()->get('admin')['username'],'password'=>$this->oldPassword])) {
                $validator->errors()->add('oldPassword', 'Your old password is not correct');
            }
        });
    }
}
