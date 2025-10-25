<?php

namespace App\Http\Responses;

use Filament\Http\Responses\Auth\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request): RedirectResponse
    {
        $user = Auth::user();

        if ($user->hasRole('root admin')) {
            return redirect()->to('/admin');
        } elseif ($user->hasRole('Editor')) {
            return redirect()->to('/editor');
        } elseif ($user->hasRole('Viewer')) {
            return redirect()->to('/viewer');
        }

        return redirect()->to('/admin');
    }
}