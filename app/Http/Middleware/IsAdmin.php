<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        // check this user is logged
        if (!$user) {
            return redirect('/login');
        }
        // get role of user is admin or super admin
        if ($user['role_id'] === 3 || $user['role_id'] === 4) {
            return $next($request);
        } else {
            return redirect('/login');
        }
    }
}
