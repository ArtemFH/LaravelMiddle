<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function save(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('user.profile'));
        }

        $validateFields = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (User::where('email', $validateFields['email'])->exists()) {
            redirect(route('user.registration'))->withErrors([
                'email' => 'Such email already exists'
            ]);
        }

        $user = User::create($validateFields);

        if ($user) {
            Auth::login($user);
            return redirect(route('user.profile'));
        }

        return redirect(route('user.profile'))->withErrors([
            'formError' => 'Error'
        ]);
    }

    public function checkAvailability()
    {
        if (Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('registration');
    }
}
