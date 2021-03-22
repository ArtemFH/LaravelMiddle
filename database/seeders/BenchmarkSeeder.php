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
                'score' => '13041',
                'user_id' => '1',
                'nomination_id' => '10',
            ],
            [
                'place' => '8',
                'image' => 'test.jpg',
                'score' => '9093',
                'user_id' => '3',
                'nomination_id' => '10',
            ],
            [
                'place' => '3',
                'image' => 'test.jpg',
                'score' => '14810',
                'user_id' => '4',
                'nomination_id' => '10',
            ],
            [
                'place' => '5',
                'image' => 'test.jpg',
                'score' => '10831',
                'user_id' => '1',
                'nomination_id' => '10',
            ],
        ];
        DB::table('benchmarks')->insert($benchmarks);
    }
}
