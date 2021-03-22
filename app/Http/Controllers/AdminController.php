<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
//        $this->middleware('can:admin');
//        $this->middleware('can:user');
//        $this->middleware('can:moderator');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin Panel'
        );

        $users = DB::table('users')->get();
        return view('admin.admin-panel', compact('users'))->with($data);
    }
}
