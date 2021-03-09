<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function review()
    {
        if (Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('login');
    }

    public function blabla()
    {

    }
}
