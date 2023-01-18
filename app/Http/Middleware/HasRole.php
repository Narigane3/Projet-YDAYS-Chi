<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        // check this user is logged
        if (! $user){
            return redirect('/login');
        }
        // get role of user
        if ($user['role_id'] === 2 || $user['role_id'] === 3 || $user['role_id'] === 4  ){
            return $next($request);
        }
        return redirect('/login');
    }
}
