<?php

namespace App\Service;

use Illuminate\Support\Facades\Auth;

class Authentication
{
    public function login($email, $password, $guard)
    {
        if (!Auth::guard($guard)->attempt(['email' => $email, 'password' => $password])) {
            return false;
        }

        $user = Auth::guard($guard)->user();
        if ($user->role != $guard) {
            Auth::guard($guard)->logout();
            return false;
        }

        return true;
    }
}
