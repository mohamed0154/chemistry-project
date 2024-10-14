<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
// use Illuminate\Auth\Middleware\Redirect as Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Redirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('web')->check()){
            return redirect(route('welcome_users'));
        }
        return $next($request);
    }
}
