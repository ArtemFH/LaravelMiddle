<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class RegistrationController extends Controller
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
            return redirect(route('user.registration'))->withErrors([
                'email' => 'Such email already exists'
            ]);
        }

        if (User::where('username', $validateFields['username'])->exists()) {
            return redirect(route('user.registration'))->withErrors([
                'username' => 'Such username already exists'
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

    public function registrationAvailability()
    {
        $data = array(
            'title' => 'Registration'
        );

        if (Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('registration')->with($data);
    }
}
