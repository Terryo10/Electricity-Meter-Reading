<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectToPanelBasedOnRole
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            if ($user->hasRole('root admin')) {
                return redirect('/admin');
            } elseif ($user->hasRole('Editor')) {
                return redirect('/editor');
            } elseif ($user->hasRole('Viewer')) {
                return redirect('/viewer');
            }
        }

        return $next($request);
    }
}