<?php

namespace App\Http\Requests;

class UserStoreRequest extends BaseFormRequest
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
            'fullname'   => [
                'required',
                'min:3',
                'regex:/(^[a-zaáàảãạâấầẩẫậăắằẳẵặeéèẻẽẹêếềểễệiíìỉĩịoóòỏõọôốồổỗộơớờởỡợuúùủũụưứừửữựyýỳỷỹỵđ ]+)+$/i',
            ],
            'username' => [
                'required',
                'min:3',
                'unique:users,username',
                'regex:/^(\w)+$/i',
            ],
            'email' => 'required|email|unique:users,email',
            'phoneNumber' => [
                'required',
                'regex:/^(0|\+84|84)(3[^01][0-9]{7}$|7[0-9]{8}$|5[68][0-9]{7}$|5[9][0-9]{7}$|8[689][0-9]{7}$|9[^5][0-9]{7}$)/',
                'unique:users,phoneNumber',
            ],
            'password'   => 'required|min:3|max:32',
            'rePassword'   => [
                'required',
                'regex:/^([\w!@#$%\^&*()-_+={}|:;"\'<>,.\/\? ])+$/i',
                'same:password'
            ]
        ];
    }

    public function messages()
    {
        return [
            'fullname.required'   =>    'Name cannot be blank',
            'fullname.min'        =>    'Name must be at least 3 characters',
            'fullname.regex'      =>    'Invalid name',
            
            'username.required'   =>    'Username cannot be blank',
            'username.min'        =>    'Username must be at least 3 characters',
            'username.regex'      =>    'Invalid Username',
            'username.unique'     =>    'Username already exists',

            'email.required'      =>    'Email cannot be blank',
            'email.email'         =>    'Invalid Email',
            'email.unique'        =>    'Email already exists',

            'phoneNumber.required'=>    'Phone Number cannot be blank',
            'phoneNumber.regex'   =>    'Invalid Phone Number',
            'phoneNumber.unique'  =>    'Phone Number already exists',

            'password.required'   =>    'Password cannot be blank',
            'password.min'        =>    'Password must be at least 3 characters',
            'password.max'        =>    'Password cannot exceed 32 characters',
            'password.regex'      =>    'Invalid Password',

            'rePassword.required' =>    'Please re-enter the password',
            'rePassword.same'     =>    'Password does not match',
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
            'fullname'      =>  'trim|escape|capitalize',
            'email'         =>  'trim|escape|lowercase',
            'jsonVar'       =>  'cast:array',
            'description'   =>  'strip_tags',
            'phoneNumber'   =>  'digit',
        ];
    }
}



