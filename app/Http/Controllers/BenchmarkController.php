<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BenchmarkController extends Controller
{
    public function index()
    {

        $data = array(
            'title' => 'Home'
        );
        $benchmarkCpus = Benchmark::query()->orderBy('score', 'DESC')->get();
        return view('home', compact('benchmarkCpus'))->with($data);
    }

}
