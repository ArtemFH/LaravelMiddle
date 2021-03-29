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
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ], [
                'image' => 'test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
            ],
        ];
        DB::table('benchmarks')->insert($benchmarks);
    }
}
