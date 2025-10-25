<?php

namespace App\Http\Responses;

use Filament\Http\Responses\Auth\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request): RedirectResponse
    {
        $user = Auth::user();

        if ($user->hasRole('root admin')) {
            return Redirect::to('/admin');
        } elseif ($user->hasRole('Editor')) {
            return Redirect::to('/editor');
        } elseif ($user->hasRole('Viewer')) {
            return Redirect::to('/viewer');
        }

        return Redirect::to('/admin');
    }
}