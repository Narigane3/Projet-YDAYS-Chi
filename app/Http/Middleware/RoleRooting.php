<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleRooting
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
        if (is_null($user)|| $user['role_id'] == 2 || $user['role_id'] == 3 || $user['role_id'] == 4) {
            return redirect('/admin/'); // redirect to admin home
        } else {
            return redirect('/'); // redirect to home
        }
    }
}
