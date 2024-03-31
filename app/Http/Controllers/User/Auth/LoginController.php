<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }
}
