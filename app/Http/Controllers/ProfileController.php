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
        $info["remember_token"] = $request->input('_token');
        // update database
        $id = session()->get('admin')['id'];
        User::where('id', $id)->update($info);
        // get session data
        $data = User::where('id', $id)->select(['email','phoneNumber','address','description'])->first()->toArray();;
        $user = $request->session()->get('admin');

        $user['email'] = $data['email'];
        $user['phoneNumber'] = $data['phoneNumber'];
        $user['address'] = $data['address'];
        $user['description'] = $data['description'];
        // notification 
        if($user==$request->session()->get('admin')) $messages = "Nothing changes";
        else $messages="Change profile successfully";
        // update session
        $request->session()->put('admin',$user);

        return redirect('admin/profile')->with(['success' => $messages,'active'=>'changeInfo']);
    }
    public function updatePassword(UserPasswordRequest $request)
    {   // get request
        $info = ['password'=>bcrypt($request->input('password'))];
        $info["remember_token"] = $request->input('_token');
        // update database
        $id = session()->get('admin')['id'];
        User::where('id', $id)->update($info);
        return redirect('admin/profile')->with(['success' => 'Change password successfully','active'=>'changePassword']);
    }
}
