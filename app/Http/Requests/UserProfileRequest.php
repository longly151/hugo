<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class UserProfileRequest extends BaseFormRequest
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
            'email' => [
                Rule::unique('users')->ignore(session('admin')['id']),
                'required',
                'email',
            ],
            'phoneNumber' => [
                Rule::unique('users')->ignore(session('admin')['id']),
                'required',
                'regex:/^(0|\+84|84)(16[^01][0-9]{7}$|12[0-9]{8}$|18[68][0-9]{7}$|19[9][0-9]{7}$|8[689][0-9]{7}$|9[^5][0-9]{7}$)/',
            ],
        ];
    }

    public function messages()
    {
        return [
            'email.required'      =>    'Email cannot be blank',
            'email.email'         =>    'Invalid Email',
            'email.unique'        =>    'Email already exists',

            'phoneNumber.required'=>    'Phone Number cannot be blank',
            'phoneNumber.regex'   =>    'Invalid Phone Number',
            'phoneNumber.unique'  =>    'Phone Number already exists',
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
            'email'         =>  'trim|escape|lowercase',
            'phoneNumber'   =>  'digit',
            // 'description'   =>  'strip_tags',
        ];
    }
}



