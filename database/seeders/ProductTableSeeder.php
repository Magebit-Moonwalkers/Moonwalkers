<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        // Teleskopi

        DB::table("products")->insert([
            'name' => 'Celestron PowerSeeker 40 AZ teleskops',
            'product_code' => '821598',
            'price' => 54.95,
            'quantity' => 2,
            'brand_id' => 7,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Celestron Travel Scope 50 teleskops',
            'product_code' => '822036',
            'price' => 85.00,
            'quantity' => 1,
            'brand_id' => 7,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Omegon AC 70/400 Solar AZ teleskops',
            'product_code' => '53090',
            'price' => 129.00,
            'quantity' => 3,
            'brand_id' => 1,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Celestron Travel Scope 70 "Saules sistēma" teleskops',
            'product_code' => '822035S',
            'price' => 175.00,
            'quantity' => 1,
            'brand_id' => 7,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Bresser Solarix AZ 76/350 teleskops',
            'product_code' => '4676359',
            'price' => 112.00,
            'quantity' => 1,
            'brand_id' => 6,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Bresser Junior 76/300 Compact Smart teleskops',
            'product_code' => '8843205',
            'price' => 114.90,
            'quantity' => 5,
            'brand_id' => 6,
            'category_id' => 1,
        ]);
    }
}
