<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectAfterLogin
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (Auth::check() && $request->routeIs('filament.admin.auth.login') && $request->isMethod('post')) {
            $user = Auth::user();
            
            if ($user->hasRole('root admin')) {
                return redirect('/admin');
            } elseif ($user->hasRole('Editor')) {
                return redirect('/editor');
            } elseif ($user->hasRole('Viewer')) {
                return redirect('/viewer');
            }
        }

        return $response;
    }
}