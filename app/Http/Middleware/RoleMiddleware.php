<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if(Auth::check() && Auth::user()->role != $role){
            auth()->guard('web')->logout();
            // Redirect back to home page
            return redirect('/')->with('error', __('index.Unauthorized access. Please log in with the correct account.'));
        }
        return $next($request);
    }


}
