<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;
use Illuminate\Support\Facades\Auth;

class Login extends BaseLogin
{
    protected string $view = 'filament.pages.auth.login';

    public function getRedirectUrl(): string
    {
        if (Auth::check() && Auth::user()->role === 'Admin') {
            return '/admin';
        }

        return '/';
    }
}
