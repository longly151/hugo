<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Tag;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\Redis;
use App\Helpers\Helper;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('admin.body.post.manage',['posts'=>$posts]);
    }
    public function manageByAuthor()
    {
        $posts = Post::where('author_id',session('admin')['id'])->paginate(5);
        return view('admin.body.post.manage-by-author',['posts'=>$posts]);
    }
    public function publish($id)
    {
        $post = Post::find($id);
        $post->status = 'public';
        $post->published_at = now();
        $post->save();
        return redirect('/admin/post/manage')->with('success','Publish Post successfully ');
    }
    public function unpublish($id)
    {
        $post = Post::find($id);
        $post->status = 'pending';
        $post->published_at = NULL;
        $post->save();
        return redirect('/admin/post/manage')->with('success','Unpublish Post successfully ');
    }
    public function bin()
    {
        $posts = Post::onlyTrashed()->orderBy('created_at','desc')->paginate(5);
        return view('admin.body.post.bin',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::select('id','name')->get();
        $topCategories = Category::where('parent_id',NULL)->select('id','name')->get();
        return view('admin.body.post.add',['topCategories'=>$topCategories,'tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = $request->except('_token','tags');
        $post['author_id'] = session()->get('admin')['id'];
        // handle category
        if($post['topCategory'] == '0') {
            unset($post['topCategory']);
            unset($post['category']);
            unset($post['subCategory']);
        } else {
            if ($post['category'] == 0) {
                $post['category'] = $post['topCategory'];
                unset($post['topCategory']);
                unset($post['subCategory']);
            } else {
                if ($post['subCategory'] == 0) {
                    unset($post['topCategory']);
                    unset($post['subCategory']);
                } else {
                    
                    $post['category'] = $post['subCategory'];
                    unset($post['topCategory']);
                    unset($post['subCategory']);
                }
            }
        }
        $dbPost = new Post;
        $dbPost->title = $post['title'];
        $dbPost->description = $post['description'];
        $dbPost->content = $post['content'];
        $dbPost->category_id = array_key_exists("category",$post) ? $post['category']:NULL;
        $dbPost->author_id = $post['author_id'];
        // handle cover
        if ($request->file('cover')) {
            $file = $request->file('cover');
            $path = Helper::createS3Url('post', $file);
            $img = Helper::resizeImage('675', $file);
            $dbPost->cover = Helper::s3Upload($path, $img);
        };
        // done
        $dbPost->status = $request->draft == 'on' ? 'draft':'pending';
        $dbPost->save();
        $dbPost->tags()->sync($request->tags);
        return redirect('/admin/post/manage')->with('success','Add post successfully');
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
        $post = Post::where('id',$id)->first();
        $tags = Tag::select('id','name')->get();
        $topCategories = Category::where('parent_id',NULL)->select('id','name')->get();
        if ($post->category){
            if($post->category->categoryType() == 'topCategory') {
                $post->topCategory = $post->category;
                $post->category = '';
            } else {
                if($post->category->categoryType() == 'category') {
                    $post->topCategory = Category::where('id',$post->category['parent_id'])->first();
                } else {
                    $post->subCategory = $post->category;
                    $post->category = Category::where('id',$post->subCategory['parent_id'])->first();
                    $post->topCategory = Category::where('id',$post->category['parent_id'])->first();
                }
            }
        }
        return view('admin.body.post.edit',['post'=>$post,'topCategories'=>$topCategories,'tags'=>$tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = $request->except('_token','tags');
        $post['author_id'] = session()->get('admin')['id'];
        // handle category
        if($post['topCategory'] == '0') {
            unset($post['topCategory']);
            unset($post['category']);
            unset($post['subCategory']);
        } else {
            if ($post['category'] == 0) {
                $post['category'] = $post['topCategory'];
                unset($post['topCategory']);
                unset($post['subCategory']);
            } else {
                if ($post['subCategory'] == 0) {
                    unset($post['topCategory']);
                    unset($post['subCategory']);
                } else {
                    
                    $post['category'] = $post['subCategory'];
                    unset($post['topCategory']);
                    unset($post['subCategory']);
                }
            }
        }
        
        $dbPost = Post::find($id);
        $dbPost->title = $post['title'];
        $dbPost->description = $post['description'];
        $dbPost->content = $post['content'];
        $dbPost->category_id = array_key_exists("category",$post) ? $post['category']:NULL;
        $dbPost->author_id = $post['author_id'];
        // handle cover
        if ($request->file('cover')) {
            $file = $request->file('cover');
            $path = Helper::createS3Url('post', $file);
            $img = Helper::resizeImage('675', $file);
            $dbPost->cover = Helper::s3Upload($path, $img);
        };
        // done
        $dbPost->status = $request->draft == 'on' ? 'draft':'pending';
        $dbPost->save();
        $dbPost->tags()->sync($request->tags);
        return redirect('/admin/post/manage')->with('success','Edit post successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->json()->all();
        Post::where('id',$id)->delete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function restore(Request $request)
    {
        $id = $request->json()->all();
        Post::where('id',$id)->restore();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    public function destroy(Request $request)
    {
        $id = $request->json()->all();
        Post::where('id',$id)->forceDelete();
        return response()->json([
            'messages' => 'success'
        ],200);
    }
    
}
