<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->role_id == 3) {
            $users = DB::table('users')->where('role_id', '!=', '3')->get();
            return view('admin.users.index', compact('users'));
        } else {
            return redirect(route('home'));
        }
    }
}
