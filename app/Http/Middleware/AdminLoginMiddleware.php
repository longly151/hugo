<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

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
            if($user -> role_id != 4) {
                return $next($request);
            } else {
                return redirect()->back();
            }
        }
        return redirect('/admin/login')->with('deny','Please login to access this page');
    }
}
