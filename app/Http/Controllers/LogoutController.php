<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
