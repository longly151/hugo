<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
use App\Tag;
use App\Role;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where(['status' => 'active',['role_id','!=','1']])->select('id','fullname','username','created_at','role_id')->paginate(5);
        $roles = Role::where('name','!=','admin')->get();
        return view('admin.body.user.manage',['users' => $users,'roles' => $roles]);
    }
    public function list()
    {
        $users = User::where(['status' => 'active'])->select('id','fullname','email','avatar','role_id')->paginate(10);
        return view('admin.body.user.list',['users' => $users]);
    }
    public function inactive()
    {
        $users = User::where([['status','!=','active']])->paginate(15);
        $roles = Role::where('name','!=','admin')->get();
        return view('admin.body.user.inactive',['users' => $users,'roles' => $roles]);
    }
    public function bin()
    {
        $users = User::onlyTrashed()->paginate(15);
        $roles = Role::where('name','!=','admin')->get();
        return view('admin.body.user.bin',['users' => $users,'roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $user = User::withTrashed()->where('id',$id)->first();
        return view('admin.body.user.view',['user' => $user]);
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
        $role = $request->input('role');
        User::where('id',$id)->update(['role_id'=>$role]);
        return redirect()->back()->with('success','Change role successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ban(Request $request)
    {
        $id = $request->json()->all();
        User::where('id',$id)->update(['status'=>'banned']);
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function active(Request $request)
    {
        $id = $request->json()->all();
        User::where('id',$id)->update(['status'=>'active']);
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function delete(Request $request)
    {
        $id = $request->json()->all();
        Tag::where('author_id',$id)->delete();
        Category::where('author_id',$id)->delete();
        Post::where('author_id',$id)->delete();
        User::where('id',$id)->delete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function restore(Request $request)
    {
        $id = $request->json()->all();
        Tag::where('author_id',$id)->restore();
        Category::where('author_id',$id)->restore();
        Post::where('author_id',$id)->restore();
        User::where('id',$id)->restore();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function destroy(Request $request)
    {
        $id = $request->json()->all();
        User::where('id',$id)->forceDelete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
}
