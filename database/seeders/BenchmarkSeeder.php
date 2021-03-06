<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenchmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $benchmarks = [
            [
                'place' => '1',
                'image' => 'test.jpg',
                'user_id' => '1',
                'nomination_id' => '10',
            ]
        ];
        DB::table('benchmarks')->insert($benchmarks);
    }
}
