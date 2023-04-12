<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if (!Auth::check()) {
            return redirect()->route('/');
        }
        $role=Auth::user()->role_name;
        if ($role == "Admin") {
     
            return $next($request);
        }
        
        if ($role=="User") {
            return redirect()->route('normaluser');
        }
        
         
        else {
            return redirect()->route('/');
        }
        
        
        return $next($request);
        }
}
