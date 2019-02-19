<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Tag;
use App\Category;
use App\Post;

class AuthorRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminap\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$type)
    {
        if ($type =='tag') {
            $id = null !== ($request->route('id'))? $request->route('id'):$request->json()->all();
            $tag = Tag::withTrashed()->where('id',$id)->first();
            if(!$tag) {
                abort(404);
            }
            else {
                if ($tag->author_id !== session()->get('admin')['id']&&session()->get('admin')['role']!=='admin'&&session()->get('admin')['role']!=='moderator') {
                    if (null !== ($request->route('id'))) {
                        abort(403);
                    }
                    else return response()->json([
                        'messages' => 'fail'
                    ],403);
                }
                return $next($request);
            }
        } else if ($type == 'category') {
            $id = null !== ($request->route('id'))? $request->route('id'):$request->json()->all();
            $category = Category::withTrashed()->where('id',$id)->first();
            if(!$category) {
                abort(404);
            }
            else {
                if ($category->author_id !== session()->get('admin')['id']&&session()->get('admin')['role']!=='admin'&&session()->get('admin')['role']!=='moderator') {
                    if (null !== ($request->route('id'))) {
                        abort(403);
                    }
                    else return response()->json([
                        'messages' => 'fail'
                    ],403);
                }
                return $next($request);
            }
        } else if ($type == 'post') {
            $id = null !== ($request->route('id'))? $request->route('id'):$request->json()->all();
            $post = Post::withTrashed()->where('id',$id)->first();
            if(!$post) {
                abort(404);
            }
            else {
                if ($post->author_id !== session()->get('admin')['id']&&session()->get('admin')['role']!=='admin'&&session()->get('admin')['role']!=='moderator') {
                    if (null !== ($request->route('id'))) {
                        abort(403);
                    }
                    else return response()->json([
                        'messages' => 'fail'
                    ],403);
                }
                return $next($request);
            }
        }
    }
}
