<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use App\Page;
use App\Helpers\Helper;
use Image;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('created_at','desc')->paginate(5);
        return view('admin.body.page.manage',['pages'=>$pages]);
    }
    public function edit($id)
    {
        $page = Page::where('id',$id)->first();
        return view('admin.body.page.edit',['page'=>$page]);
    }
    public function update(PageRequest $request, $id)
    {
        $page = $request->all();
        $page['author_id'] = session()->get('admin')['id'];
        $dbPage = Page::find($id);
        $dbPage->content = $page['content'];
        $dbPage->author_id = $page['author_id'];
        $dbPage->save();
        return redirect('/admin/page/manage')->with('success','Edit page successfully');
    }
}
