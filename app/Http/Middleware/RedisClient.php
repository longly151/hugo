<?php

namespace App\Http\Middleware;

use Closure;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\View;
class RedisClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Category
        $topCategories = Category::where('parent_id',NULL)->select('id','name','url')->get()->toArray();
        foreach($topCategories as $i => $topCategory){
            $topCategories[$i] = array_add($topCategory,'categories',Category::where('parent_id',$topCategory['id'])->select('id','name','parent_id','url')->get()->toArray());
            foreach($topCategories[$i]['categories'] as $k => $category){
                $topCategories[$i]['categories'][$k] = array_add($category,'subCategories',Category::where('parent_id',$category['id'])->select('id','name','parent_id','url')->get()->toArray());
            }
        }
        // if (!Redis::get('topCategories')) {
        //     Redis::set('topCategories',json_encode($topCategories));
        // }
        Redis::set('topCategories',json_encode($topCategories));
        $topCategories = json_decode(Redis::get('topCategories'),true);
        // Menu Post
        $menuPosts = Post::whereRaw('category_id < 5')->select('id','title','public_at','cover','category_id','url')->get();
        
        View::share(['topCategories'=> $topCategories,'menuPosts'=>$menuPosts]);
        return $next($request);
    }
}
