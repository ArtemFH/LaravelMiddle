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
        if (Hardware::where('user_id', Auth::id())->first()) {
            return redirect('user.profile');
        }

        $validateFields = $request->validate([
            'CPU' => 'required',
            'GPU' => 'required',
            'RAM' => 'required',
            'PSU' => 'required',
            'storage' => 'required',
            'motherboard' => 'required'
        ]);

        Hardware::create($validateFields + ['user_id' => Auth::id()]);

        return redirect(route('home.head'));
    }

    public function requestHardwareAvailability()
    {
        $data = array(
            'title' => 'Hardware'
        );

        return view('requires.requestHardware')->with($data);
    }

    public function deleteHardware(Request $request)
    {
        Hardware::where('user_id', Auth::id())->first()->delete();

        return redirect(route('user.profile'));
    }
}
