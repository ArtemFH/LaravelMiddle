<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $awards = [
            [
                'name' => 'Best 1 CPU'
            ],
            [
                'name' => 'Best 100 CPU'
            ],
            [
                'name' => 'Best 1 GPU'
            ],
            [
                'name' => 'Best 100 GPU'
            ],
            [
                'name' => 'Best 1 RAM'
            ],
            [
                'name' => 'Best 100 RAM'
            ],
        ];
        DB::table('awards')->insert($awards);
    }
}
