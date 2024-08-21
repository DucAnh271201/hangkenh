<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleCheckMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::guard('admin')->user()->role->name) {
            return redirect(route('admin.login'));
        }
        return $next($request);
    }
}
