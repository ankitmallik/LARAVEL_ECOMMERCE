<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //insert

        DB::table('users')->insert([
            "name" => "mallik",
            "email" => "mallik@gamil.com",
            "password" => Hash::make('123')
        ]);
    }
}
