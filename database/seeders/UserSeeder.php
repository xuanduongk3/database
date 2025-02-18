<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo tài khoản admin
        User::create([
            'firstname' => 'Xuân Dương',
            'lastname' => 'Nguyễn',
            'gender' => true,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'), // Hash mật khẩu
            'role' => 'admin',
            'phone' => '0363672067',
        ]);

        // Tạo 24 tài khoản khách hàng sử dụng Faker
        $faker = Faker::create();

        for ($i = 1; $i <= 24; $i++) {
            User::create([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'gender' => $faker->boolean,
                'birthday' => $faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'), 
                'role' => 'customer', 
                'phone' => $faker->phoneNumber,
                'city' => $faker->city,
                'district' => $faker->word, 
                'ward' => $faker->word, 
                'address' => $faker->address,
                'firstlogin' => false, 
            ]);
        }
    }
}
