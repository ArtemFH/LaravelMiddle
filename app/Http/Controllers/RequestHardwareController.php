<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Hardware;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function requestBenchmarkAvailability()
    {
        $data = array(
            'title' => 'Hardware'
        );

        return view('requires.requestBenchmark')->with($data);
    }

    public function requestBenchmark(Request $request)
    {
        $request->validate([
            'score' => 'required',
            'image' => 'required|file'
        ]);

        $filename = Storage::disk('public')->put('benchmarks', $request->image);

        Benchmark::create($request->only('score') + ['image' => $filename, 'user_id' => Auth::id(), 'nomination_id' => 10]);

        return redirect(route('home.head'));
    }
}
