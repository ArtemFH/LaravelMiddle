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

    public function indexCpu()
    {
        $data = array(
            'title' => 'CPU',
            'nomination' => 'CPU'
        );

        $benchmarkCPUs = Benchmark::query()->where('nomination_id', '10')->orderBy('score', 'DESC')->limit(100)->get();

        return view('benchmarks.nomination.results', compact('benchmarkCPUs'))->with($data);
    }

    public function indexGpu()
    {
        $data = array(
            'title' => 'GPU',
            'nomination' => 'GPU'
        );

        $benchmarkGPUs = Benchmark::query()->where('nomination_id', '20')->orderBy('score', 'DESC')->limit(100)->get();

        return view('benchmarks.nomination.results', compact('benchmarkGPUs'))->with($data);
    }

    public function indexRam()
    {
        $data = array(
            'title' => 'RAM',
            'nomination' => 'RAM'
        );

        $benchmarkRAMs = Benchmark::query()->where('nomination_id', '30')->orderBy('score', 'DESC')->limit(100)->get();

        return view('benchmarks.nomination.results', compact('benchmarkRAMs'))->with($data);
    }
}
