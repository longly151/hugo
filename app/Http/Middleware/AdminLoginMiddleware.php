<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;

class AdminLoginMiddleware
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
        if(Auth::check()) {
            $user = Auth::user();
            $dbUser = User::where('id',$user->id)->select('status')->first();
            if($dbUser->status == 'active'){
                if($user->role_id != 4) {
                    return $next($request);
                } else {
                    abort(403);
                }
            } else {
                return redirect('/admin/logout');
            }
        }
        return redirect('/admin/login')->with('deny','Please login to access this page');
    }
}
