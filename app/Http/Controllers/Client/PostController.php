<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class postController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at','desc')->all();
        $topCategories = Category::where('parent_id',NULL)->leftJoin('users','users.id','=','categories.author_id')->select('users.fullname as author_fullname','categories.*')->get()->toArray();
        foreach($topCategories as $i => $topCategory){
            $topCategories[$i] = array_add($topCategory,'categories',Category::where('parent_id',$topCategory['id'])->leftJoin('users','users.id','=','categories.author_id')->select('users.fullname as author_fullname','categories.*')->get()->toArray());
            foreach($topCategories[$i]['categories'] as $k => $category){
                $topCategories[$i]['categories'][$k] = array_add($category,'subCategories',Category::where('parent_id',$category['id'])->leftJoin('users','users.id','=','categories.author_id')->select('users.fullname as author_fullname','categories.*')->get()->toArray());
            }
        }
        return view('client.body.home',['posts'=>$posts,'topCategories' => $topCategories]);
    }
}
