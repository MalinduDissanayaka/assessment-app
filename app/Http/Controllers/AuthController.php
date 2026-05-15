<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin() {
        return view('login');
    }

    public function login(Request $request) {
        // Validate: Empty fields, Valid email format, and Min password length [cite: 38, 39, 41, 42]
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // "Remember me" checkbox logic [cite: 48]
        $remember = $request->has('remember');

        // Attempt login and redirect to dashboard on success 
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        // Show error message on invalid credentials [cite: 47]
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}