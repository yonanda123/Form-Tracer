<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'image' => 'default.png',
                'address' => 'empty',
                'phone' => 'empty',
                'password' => Hash::make('admin'),
                'role_id'  => '1',
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'image' => 'default.png',
                'address' => 'empty',
                'phone' => 'empty',
                'password' => Hash::make('user'),
                'role_id'  => '2',
            ],
        ];
        foreach ($data as $value) {
            DB::table('users')->insert([
                'name' => $value['name'],
                'email' => $value['email'],
                'image' => $value['image'],
                'address' => $value['address'],
                'phone' => $value['phone'],
                'password' => $value['password'],
                'role_id' => $value['role_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
