<?php

namespace App\Http\Controllers;

use App\Models\Hardware;
use App\Models\User;
use Hamcrest\Arrays\IsArrayWithSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
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
        return redirect(route('home.head'));
    }

    public function profileView(Request $request)
    {
        //Допилить

        $data = array(
            'title' => 'Profile'
        );

        $check = Hardware::where('user_id', Auth::id())->first()->getAttributes();


        $hardware = Hardware::where('user_id', Auth::id())->first();

        return view('user.profile', compact('hardware', 'check'))->with($data);
    }

    public function registrationAvailability()
    {
        $data = array(
            'title' => 'Registration'
        );

        if (Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('user.registration')->with($data);
    }

    public function loginAvailability()
    {
        $data = array(
            'title' => 'Login'
        );

        if (Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('user.login')->with($data);
    }
}
