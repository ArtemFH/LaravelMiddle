<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HardwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hardware = [
            [
                'CPU' => 'Ryzen 9 5950x',
                'GPU' => 'RTX 3090',
                'RAM' => '128GB 3800 CL16',
                'PSU' => 'Super Flower Leadex II 1000W',
                'storage' => 'Samsung 980 PRO 2TB',
                'motherboard' => 'ASUS ROG Crosshair VIII HERO(Wi-Fi)',
                'user_id' => '1',
            ]
        ];
        DB::table('hardwares')->insert($hardware);
    }
}
