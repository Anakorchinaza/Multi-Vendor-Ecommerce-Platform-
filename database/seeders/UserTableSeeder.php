<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 
use DB; 

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin 001',
                'email' => 'admin001@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'status' => 'active'
            ],

            //Vendor
            [
                'name' => 'Vendor 001',
                'email' => 'vendor001@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'vendor',
                'status' => 'active'
            ],

            //User
            [
                'name' => 'User 001',
                'email' => 'user001@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'user',
                'status' => 'active'
            ],
        ]);
    }
}
