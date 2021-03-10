<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function createUser(Request $request)
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

    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('user.profile'));
        }

        $formfields = $request->only(['username', 'email', 'password']);

        if (Auth::attempt($formfields)) {
            return redirect()->intended(route('user.profile'));
        }

        return redirect(route('user.login'))->withErrors([
            'email' => 'Error email or password'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }

    public function profileView(Request $request)
    {
        //Допилить

        $data = array(
            'title' => 'Profile'
        );

        return view('profile')->with($data);
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

    public function loginAvailability()
    {
        $data = array(
            'title' => 'Login'
        );

        if (Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('login')->with($data);
    }
}
