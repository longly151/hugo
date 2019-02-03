<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Tag;

class AuthorRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminap\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = null !== ($request->route('id'))? $request->route('id'):$request->json()->all();
        $tag = Tag::withTrashed()->where('id',$id)->first();
        if(!$tag) {
            abort(404);
        }
        else {
            if ($tag->author_id !== session()->get('admin')['id']&&session()->get('admin')['role']!=='admin'&&session()->get('admin')['role']!=='moderator') {
                if (null !== ($request->route('id'))) {
                    return redirect('admin/error/403');
                }
                else return response()->json([
                    'messages' => 'fail'
                ],500);
            }
            return $next($request);
        }
    }
}
