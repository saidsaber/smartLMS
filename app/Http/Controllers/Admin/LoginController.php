<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Authentication;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(Request $request, Authentication $authentication)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($authentication->login($validated['email'], $validated['password'], 'admin')) {
            return to_route('admin.dashboard');
        }
        return back()->withErrors([
            'error' => 'Invalid email or password',
        ]);
    }
}
