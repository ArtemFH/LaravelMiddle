<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BenchmarkController extends Controller
{
    public function index()
    {

        $data = array(
            'title' => 'Home'
        );
        $benchmarkCpus = DB::table('benchmarks')->orderBy('score', 'DESC')->get();
        return view('home', compact('benchmarkCpus'))->with($data);
    }

}
