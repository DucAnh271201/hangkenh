<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Response;

class AdminAuthenticate
{
    public function handle(Request $request, Closure $next)
    {
        if (!\Auth::guard('admin')->check()) {
            return redirect(route('admin.login'));
        }
        return $next($request);
    }
}
