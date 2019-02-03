<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function getLogin() {
        return view('admin.body.auth.login');
    }
    public function postLogin(UserLoginRequest $request){
        $validated = $request->validated();
        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])) {
            if(Auth::user()->role_id == '4') {
                $request->session()->put(
                    'client',
                    [
                        'fullname' => Auth::user()->fullname,
                        'username' => Auth::user()->username,
                        'id' => Auth::user()->id,
                        'avatar' => Auth::user()->avatar,
                        'role' => Auth::user()->role()->select('name as role')->get()->first()->role,
                    ]);
                return redirect('/');
            } else {
                $request->session()->put(
                    'admin',
                    [
                        'id' => Auth::user()->id,
                        'fullname' => Auth::user()->fullname,
                        'username' => Auth::user()->username,
                        'email' => Auth::user()->email,
                        'phoneNumber' => Auth::user()->phoneNumber,
                        'address' => Auth::user()->address,
                        'description' => Auth::user()->description,
                        'avatar' => Auth::user()->avatar,
                        'role' => Auth::user()->role()->select('name as role')->get()->first()->role,
                    ]);
                return redirect('/admin')->with('loginSuccess','Hello '. $request->username .', your are logged in');
            }
        } 
        else {
            return back()->with('login_error','Username or Password is incorrect');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/admin/login');
    }
}
