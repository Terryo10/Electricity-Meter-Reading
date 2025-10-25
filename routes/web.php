<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
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
    
    return redirect('/admin/login');
});
