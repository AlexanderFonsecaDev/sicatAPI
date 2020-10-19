<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if($request->wantsJson()){
                return response()->json(request()->user());
            }
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
