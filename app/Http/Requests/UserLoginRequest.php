<?php

namespace App\Http\Requests;

class UserLoginRequest extends BaseFormRequest
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
            'username'   => 'required|min:3',
            'password'   => 'required|min:3|max:32',
        ];
    }

    public function messages()
    {
        return [
            'username.required'   => 'Username cannot be blank',
            'username.min'        => 'Username must be at least 3 characters',

            'password.required'   => 'Password cannot be blank',
            'password.min'        => 'Password must be at least 3 characters',
            'password.max'        => 'Password cannot exceed 32 characters',
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
            'username'=>'trim|escape',
        ];
    }
}

