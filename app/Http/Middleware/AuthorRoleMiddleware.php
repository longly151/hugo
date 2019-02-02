<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
       //
    }
}
