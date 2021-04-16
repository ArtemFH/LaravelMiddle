<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Hardware;
use App\Models\User;
use Hamcrest\Arrays\IsArrayWithSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Couchbase\basicEncoderV1;

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

        $hardware = Hardware::where('user_id', Auth::id())->first();

        return view('user.profile', compact('hardware'))->with($data);
    }


    public function profileUser(Request $request, $indexUser)
    {
        $indexUserGet = User::where('username', $indexUser)->first();

        if ($indexUserGet) {

            $results = Benchmark::query()->where('user_id', $indexUserGet->id)->orderBy('score', 'DESC')->get();

            $hardware = Hardware::where('user_id', $indexUserGet->id)->first();

            $data = array(
                'title' => $indexUserGet->username
            );
            return view('user.profileView', compact('indexUserGet', 'hardware', 'results'))->with($data);
        }

        return view('errors.404');
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
