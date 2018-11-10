<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DoctorMiddleware
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
        if ($request->route()->named('login', 'home', 'callback', 'register')){
            return $next($request);
        }

        if (Auth::check() && (Auth::user()->donor == 1))
            return $next($request);

        return redirect()->home();
    }
}
