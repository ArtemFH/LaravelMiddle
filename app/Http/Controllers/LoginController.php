<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }

        $formfields = $request->only(['username', 'email', 'password']);

        if (Auth::attempt($formfields)) {
            return redirect()->intended(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'username' => 'Error username',
            'email' => 'Error email'
        ]);
    }

    public function checkAvailability()
    {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('login');
    }
}
