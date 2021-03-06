<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class DonorMiddleware
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
        if ($request->route()->named('welcome', 'donor', 'login', 'callback', 'register')){
            return $next($request);
        }
        if (Auth::check() && (Auth::user()->donor == 0))
            return $next($request);
            // return redirect()->route('donor.profile');

    }
}
