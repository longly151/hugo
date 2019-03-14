<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Role;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminap\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        $user = Auth::user();
        $role = Role::where('name',$role)->select('id')->first();
        if ($user->role_id <= $role->id) {
            return $next($request);
        } else {
            abort(403);
        }
    }
}
