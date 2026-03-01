<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                
                if (Auth::check() && Auth::user()->role == 'user') {
                    return redirect('/dashboard');

                } if (Auth::check() && Auth::user()->role == 'agent'){
                    return redirect('/agent/dashboard');

                } if (Auth::check() && Auth::user()->role == 'admin'){
                    return redirect('/admin/dashboard');
                    
                }



            }
        }

        return $next($request);
    }
}