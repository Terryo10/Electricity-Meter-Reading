<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPanelAccess
{
    public function handle(Request $request, Closure $next, string $panel)
    {
        if (!Auth::check()) {
            return redirect('/admin/login');
        }

        $user = Auth::user();

        switch ($panel) {
            case 'admin':
                if (!$user->hasRole('root admin')) {
                    abort(403, 'Unauthorized access to admin panel');
                }
                break;
            case 'editor':
                if (!$user->hasRole(['root admin', 'Editor'])) {
                    abort(403, 'Unauthorized access to editor panel');
                }
                break;
            case 'viewer':
                if (!$user->hasRole(['root admin', 'Editor', 'Viewer'])) {
                    abort(403, 'Unauthorized access to viewer panel');
                }
                break;
        }

        return $next($request);
    }
}