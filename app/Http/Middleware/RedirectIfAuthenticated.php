<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role=Auth::user()->role_name;
                switch ($role) {
                    case 'Admin': 
                       
                //         return  redirect(route('dashboard'));
              
                        return redirect(RouteServiceProvider::Admin);
                        break;
                    case 'User':
                        // return  redirect(route('normaluser'));
                        return redirect(RouteServiceProvider::NormalUser);
                        break;
                    default:
                        return '/';
                }
                 
            }
        }

        return $next($request);
    }
}
 