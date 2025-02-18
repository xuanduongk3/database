<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CatalogSeeder::class,
            ProductSeeder::class,
            // FlashsaleSeeder::class,
            CartSeeder::class,
            OrderSeeder::class,
            ReviewSeeder::class
        ]);

    }
}
