<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            [
                'id'  => 1 ,
                'name' => 'Shah Md. Iktakhairul Islam',
                'email' => 'iktakhairul@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'developer',
            ],
            [
                'id'  => 2,
                'name' => 'System',
                'email' => 'system@admin.com',
                'password' => Hash::make('admin'),
                'role' => 'system',
            ],
            [
                'id'  => 3,
                'name' => 'Merchant Profile',
                'email' => 'merchant@profile.com',
                'password' => Hash::make('admin'),
                'role' => 'merchant',
            ],
        ]);
    }
}
