<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::paginate(15);
        return view('admin.body.tag.manage',['tags' => $tags]);
    }
    public function bin()
    {
        $tags = Tag::onlyTrashed()->paginate(15);
        return view('admin.body.tag.bin',['tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.body.tag.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $tag = $request->all();
        Tag::create($tag);
        return redirect('/admin/tag/add')->with('success','Add tag successfully');
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
        $tag = Tag::where('id',$id)->first();
        return view('admin.body.tag.edit',['tag'=>$tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        $name = $request->input('name');
        $tag = Tag::find($id);
        $tag->name = $name;
        $tag->save();
        return redirect('admin/tag/manage')->with('success','Update tag successfully');
    }

    public function delete(Request $request)
    {
        $id = $request->json()->all();
        Tag::where('id',$id)->delete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function restore(Request $request)
    {
        $id = $request->json()->all();
        Tag::where('id',$id)->restore();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->json()->all();
        Tag::where('id',$id)->forceDelete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
}
