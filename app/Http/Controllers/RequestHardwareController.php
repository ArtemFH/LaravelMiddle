<?php

namespace App\Http\Controllers;

use App\Models\Hardware;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestHardwareController extends Controller
{
    public function requestHardware(Request $request)
    {

        $validateFields = $request->validate([
            'CPU' => 'required',
            'GPU' => 'required',
            'RAM' => 'required',
            'PSU' => 'required',
            'storage' => 'required',
            'motherboard' => 'required',
        ]);

        Hardware::create($validateFields);

        User::updated();

        return redirect(route('home.head'));
    }

    public function requestHardwareAvailability()
    {
        $data = array(
            'title' => 'Hardware'
        );

        return view('requires.requestHardware')->with($data);
    }
}
