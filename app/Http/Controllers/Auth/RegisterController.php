<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function validateRegister(Request $request) {
        $this->validate($request,[
            'fullname'   => [
                'required',
                'min:3',
                'regex:/(^[a-zaáàảãạâấầẩẫậăắằẳẵặeéèẻẽẹêếềểễệiíìỉĩịoóòỏõọôốồổỗộơớờởỡợuúùủũụưứừửữựyýỳỷỹỵđ ]+)+$/i'
            ],
            'username' => [
                'required',
                'min:3',
                'unique:users,email',
                'regex:/^(\w)+$/i',
            ],
            'email' => 'required|email|unique:users,email',
            'phoneNumber' => [
                'required',
                'regex:/^(0|\+84|84)(16[^01][0-9]{7}$|12[0-9]{8}$|18[68][0-9]{7}$|19[9][0-9]{7}$|8[689][0-9]{7}$|9[^5][0-9]{7}$)/',
            ],
            'password'   => 'required|min:3|max:32',
            'rePassword'   => [
                'required',
                'regex:/^([\w!@#$%\^&*()-_+={}|:;"\'<>,.\/\? ])+$/i',
                'same:password'
            ]
        ],[
            'fullname.required'   =>    'Name cannot be blank',
            'fullname.min'        =>    'Name must be at least 3 characters',
            'fullname.regex'      =>    'Invalid name',
            
            'username.required'   =>    'Username cannot be blank',
            'username.min'        =>    'Username must be at least 3 characters',
            'username.regex'      =>    'Invalid Username',
            'unique'              =>    'Username already exists',

            'email.required'      =>    'Email cannot be blank',
            'email.email'         =>    'Invalid Email',
            'unique'              =>    'Email already exists',

            'phoneNumber.required'=>    'Phone Number cannot be blank',
            'phoneNumber.regex'   =>    'Invalid Phone Number',

            'password.required'   =>    'Password cannot be blank',
            'password.min'        =>    'Password must be at least 3 characters',
            'password.min'        =>    'Password must cannot exceed 32 characters',
            'password.regex'      =>    'Invalid Password',

            'rePassword.required' =>    'Please re-enter the password',
            'rePassword.same'     =>    'Password does not match',
        ]);
    }

    protected function getRegister() {
        return view('admin.body.auth.register');
    }
    protected function postRegister(Request $request)
    {
        $this->validateRegister($request);
        $user = $request->all();
        $user['password'] = bcrypt($request->password);
        $user['role_id'] = 3;
        return User::create($user);
    }
}
