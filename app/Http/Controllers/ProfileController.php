<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserProfileRequest;
use App\Http\Requests\UserPasswordRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = session()->get('admin');
        return view('admin.body.profile.profile');
    }
    public function updateInfo(UserProfileRequest $request)
    {
        // get request
        $info = $request->except('_token');
        array_add($info,"remember_token",$request->input('_token'));
        // update database
        $id = session()->get('admin')['id'];
        $user = User::find($id);
        
        $user->email = $info['email'];
        $user->phoneNumber = $info['phoneNumber'];
        $user->address = $info['address'];
        $user->description = $info['description'];
        $user->save();
        // get session data
        $info = User::where('id', $id)->select(['email','phoneNumber','address','description'])->first()->toArray();;
        $cUser = $request->session()->get('admin');

        $cUser['email'] = $info['email'];
        $cUser['phoneNumber'] = $info['phoneNumber'];
        $cUser['address'] = $info['address'];
        $cUser['description'] = $info['description'];
        // notification 
        if($cUser==$request->session()->get('admin')) $messages = "Nothing changes";
        else $messages="Change profile successfully";
        // update session
        $request->session()->put('admin',$cUser);

        return redirect('admin/profile')->with(['success' => $messages,'active'=>'changeInfo']);
    }
    public function updatePassword(UserPasswordRequest $request){
        $password = $request->input('password');
        $id = session()->get('admin')['id'];
        $user = User::find($id);
        $user->password = $password;
        $user->save();
        return redirect('admin/profile')->with(['success' => 'Change password successfully','active'=>'changePassword']);
    }
}
