<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(Request $request){
        $user = $request->except(['_token','passwordConfirm']);
        $user['password'] = md5($user['password']);
        $user['roleId'] = 1;
        DB::table('users')->insert($user);
        // $data = DB::table('roles')->get();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        return redirect('admin/login');
    }
    public function login(Request $request){
        $user = $request->except(['_token']);
        $data = DB::table('users')
        ->where('username',$user['username'])->first();
        // echo "<pre>";
        // var_dump($data->password);
        // echo "</pre>";
        if(!$data) {
            // echo "user is not exist";
            $errors = ['errUser' => 'User is not exist'];
            return view('admin.body.auth.login',compact('errors'));
        } else {
            if(!Hash::check($user['password'],$data->password)){
                $errors = ['errPassword' => 'Password is not correct'];
                return view('admin.body.auth.login',compact('errors'));
            }
            else {
                return redirect('admin');
            }
        }

    }
}
