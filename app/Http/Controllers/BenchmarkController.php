<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Nomination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BenchmarkController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Home'
        );
        $benchmarkCPUs = Benchmark::query()->where('nomination_id', '10')->orderBy('score', 'DESC')->limit(10)->get();
        $benchmarkGPUs = Benchmark::query()->where('nomination_id', '20')->orderBy('score', 'DESC')->limit(10)->get();
        $benchmarkRAMs = Benchmark::query()->where('nomination_id', '30')->orderBy('score', 'DESC')->limit(10)->get();

        return view('home', compact('benchmarkCPUs', 'benchmarkGPUs', 'benchmarkRAMs'))->with($data);
    }

}
