<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\View;
use App\Post;
use App\Category;
use App\Page;


class PageController extends Controller
{
    public function home() {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('client.body.home',['posts'=>$posts]);
    }
    public function post($url) {
        $category = Category::where('url',$url)->select('id')->first();
        if($category) {
            $posts = Post::where('category_id',$category->id)->get();
            return view('client.body.post_by_category',['posts'=>$posts]);
        }
        else {
            $post = Post::where('url',$url)->first();
            if(!$post) return redirect('404');
            return view('client.body.post',['post'=>$post]);
        }
    }
    public function about() {
        $about = Page::where('name','about')->first();
        return view('client.body.about',['about'=>$about]);
    }
    public function contact() {
        $contact = Page::where('name','contact')->first();
        return view('client.body.contact',['contact'=>$contact]);
    }
    public function gallery() {
        return view('client.body.gallery');
    }
    public function error_404() {
        return view('client.body.404');
    }
    
}
