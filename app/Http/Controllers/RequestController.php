<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class RequestController extends Controller
{
    public function titleHome()
    {
        $data = array(
            'title' => 'Home page'
        );
        return view('layouts.base')->with($data);

    }

    public function adminAvialable()
    {
        Blade::if('admin', function () {
            if (auth()->user() && auth()->user()->admin()) {
                return 1;
            }
            return 0;
        });
    }
}
