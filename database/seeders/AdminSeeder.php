<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'ArtemFH',
                'password' => 'warfaswarfas',
                'email' => 'artembereza1@mail.ru',
                'role_id' => '3'
            ]
        ];
        DB::table('users')->insert($users);
    }
}
