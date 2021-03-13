<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usershardware = [
            [
                'username' => 'Artem',
                'password' => '$2y$12$sDMLTH4SPGUP88qTXV20zOVJbVVPvKy03jEs8FcJWe2QXYFIG2MA2',
                'email' => 'artembereza2@mail.ru',
                'role_id' => '1',
                'like_nomination_id' => '30',
                'hardware_id' => '2'
            ]
        ];
        $users = [
            [
                'username' => 'Voice',
                'password' => '$2y$12$sDMLTH4SPGUP88qTXV20zOVJbVVPvKy03jEs8FcJWe2QXYFIG2MA2',
                'email' => 'voice@mail.ru',
                'role_id' => '1',
                'like_nomination_id' => '20',
            ],
            [
                'username' => 'Noroff',
                'password' => '$2y$12$sDMLTH4SPGUP88qTXV20zOVJbVVPvKy03jEs8FcJWe2QXYFIG2MA2',
                'email' => 'norof@gmail.com',
                'role_id' => '1',
                'like_nomination_id' => '30',
            ],
            [
                'username' => 'Suleiman',
                'password' => '$2y$12$sDMLTH4SPGUP88qTXV20zOVJbVVPvKy03jEs8FcJWe2QXYFIG2MA2',
                'email' => 'tatarin@mail.ru',
                'role_id' => '1',
                'like_nomination_id' => '10',
            ]
        ];
        DB::table('users')->insert($users);
        DB::table('users')->insert($usershardware);
    }
}
