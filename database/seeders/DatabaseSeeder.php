<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->call([
            UserSeeder::class,
            CatalogSeeder::class,
            BrandSeeder::class,
            // ColorSeeder::class,
            SupplierSeeder::class,
            RatingSeeder::class,
            VoucherSeeder::class,
            ProductSeeder::class,
            CartSeeder::class,
            FlashsaleSeeder::class,
            OrderSeeder::class,
            ProductReviewSeeder::class,
            OrderShippingAddressSeeder::class,
            ProductDetailSeeder::class,
            ProductAttributeSeeder::class,
            CustomerAddressSeeder::class
        ]);
    }
}
