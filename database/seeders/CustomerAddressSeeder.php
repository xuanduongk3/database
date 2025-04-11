<?php

namespace Database\Seeders;

use App\Models\CustomerAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        CustomerAddress::create([
            'user_id' => 2,
            'province' => 'Hồ Chí Minh',
            'district' => 'Quận 12',
            'ward' => 'Trung Mỹ Tây',
            'address' => '99/3/3a',
            'default_address' => 1
        ]);
    }
}
