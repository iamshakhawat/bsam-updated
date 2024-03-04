<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array(
            array(
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin@gmail.com'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'User',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('user@gmail.com'),
                'role'=>'user',
                'status'=>'active'
            ),
            array(
                'name'=>'Delivery',
                'email'=>'delivery@gmail.com',
                'password'=>Hash::make('delivery@gmail.com'),
                'role'=>'delivery',
                'status'=>'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
