<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Service\Authentication;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request, Authentication $authentication)
    {
        $validated = $request->validated();

        if ($authentication->login($validated['email'], $validated['password'], 'teacher')) {
            return to_route('teacher.dashboard');
        }
        return back()->withErrors([
            'error' => 'Invalid email or password',
        ]);
    }
}
