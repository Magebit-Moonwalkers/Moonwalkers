<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();

        // 1
        DB::table("products")->insert([
            'src' => '/images/products/product_1.jpg',
            'product_id' => 1,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_1_2.jpg',
            'product_id' => 1,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_1_3.jpg',
            'product_id' => 1,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_1_4.jpg',
            'product_id' => 1,
        ]);

        // 2
        DB::table("products")->insert([
            'src' => '/images/products/product_2.jpg',
            'product_id' => 2,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_2_2.jpg',
            'product_id' => 2,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_2_3.jpg',
            'product_id' => 2,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_2_4.jpg',
            'product_id' => 2,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_2_5.jpg',
            'product_id' => 2,
        ]);

        // 3
        DB::table("products")->insert([
            'src' => '/images/products/product_3.jpg',
            'product_id' => 3,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_3_2.jpg',
            'product_id' => 3,
        ]);

        // 4
        DB::table("products")->insert([
            'src' => '/images/products/product_4.jpg',
            'product_id' => 4,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_4_2.jpg',
            'product_id' => 4,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_4_3.jpg',
            'product_id' => 4,
        ]);

        // 5
        DB::table("products")->insert([
            'src' => '/images/products/product_5.jpg',
            'product_id' => 5,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_5_2.jpg',
            'product_id' => 5,
        ]);

        // 6
        DB::table("products")->insert([
            'src' => '/images/products/product_6.jpg',
            'product_id' => 6,
        ]);
        DB::table("products")->insert([
            'src' => '/images/products/product_6_2.jpg',
            'product_id' => 6,
        ]);
    }
}
