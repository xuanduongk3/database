<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'username' => 'admin',
            'gender' => 1,
            'birthday' => '1999-09-09',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'phone' => '0987753456',
        ]);
        User::create([
            'username' => 'Nguyễn Quang Huy',
            'gender' => 1,
            'birthday' => '2007-04-18',
            'email' => 'khachhang@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'customer',
            'phone' => '0987753456',
        ]);

        User::factory()->count(50)->create();
    }
}
