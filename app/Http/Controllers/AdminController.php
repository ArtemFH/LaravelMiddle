<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('admin.users.index', compact('users'));
    }
}
