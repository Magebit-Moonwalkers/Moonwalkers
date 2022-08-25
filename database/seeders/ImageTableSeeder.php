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
        DB::table("images")->insert([
            'src' => '/images/products/product_1.jpg',
            'product_id' => 1,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_1_2.jpg',
            'product_id' => 1,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_1_3.jpg',
            'product_id' => 1,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_1_4.jpg',
            'product_id' => 1,
        ]);

        // 2
        DB::table("images")->insert([
            'src' => '/images/products/product_2.jpg',
            'product_id' => 2,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_2_2.jpg',
            'product_id' => 2,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_2_3.jpg',
            'product_id' => 2,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_2_4.jpg',
            'product_id' => 2,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_2_5.jpg',
            'product_id' => 2,
        ]);

        // 3
        DB::table("images")->insert([
            'src' => '/images/products/product_3.jpg',
            'product_id' => 3,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_3_2.jpg',
            'product_id' => 3,
        ]);

        // 4
        DB::table("images")->insert([
            'src' => '/images/products/product_4.jpg',
            'product_id' => 4,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_4_2.jpg',
            'product_id' => 4,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_4_3.jpg',
            'product_id' => 4,
        ]);

        // 5
        DB::table("images")->insert([
            'src' => '/images/products/product_5.jpg',
            'product_id' => 5,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_5_2.jpg',
            'product_id' => 5,
        ]);

        // 6
        DB::table("images")->insert([
            'src' => '/images/products/product_6.jpg',
            'product_id' => 6,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_6_2.jpg',
            'product_id' => 6,
        ]);

        // 7
        DB::table("images")->insert([
            'src' => '/images/products/product_7.jpg',
            'product_id' => 7,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_7_2.jpg',
            'product_id' => 7,
        ]);

        // 8
        DB::table("images")->insert([
            'src' => '/images/products/product_8.jpg',
            'product_id' => 8,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_8_2.jpg',
            'product_id' => 8,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_8_3.jpg',
            'product_id' => 8,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_8_4.jpg',
            'product_id' => 8,
        ]);

        // 9
        DB::table("images")->insert([
            'src' => '/images/products/product_9.png',
            'product_id' => 9,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_9_2.png',
            'product_id' => 9,
        ]);

        // 10
        DB::table("images")->insert([
            'src' => '/images/products/product_10.jpg',
            'product_id' => 10,
        ]);

        // 11
        DB::table("images")->insert([
            'src' => '/images/products/product_11.png',
            'product_id' => 11,
        ]);

        // 12
        DB::table("images")->insert([
            'src' => '/images/products/product_12.jpg',
            'product_id' => 12,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_12_2.jpg',
            'product_id' => 12,
        ]);

        // 13
        DB::table("images")->insert([
            'src' => '/images/products/product_13.png',
            'product_id' => 13,
        ]);

        // 14
        DB::table("images")->insert([
            'src' => '/images/products/product_14.jpg',
            'product_id' => 14,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_14_2.jpg',
            'product_id' => 14,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_14_3.jpg',
            'product_id' => 14,
        ]);

        // 15
        DB::table("images")->insert([
            'src' => '/images/products/product_15.png',
            'product_id' => 15,
        ]);

        // 16
        DB::table("images")->insert([
            'src' => '/images/products/product_16.png',
            'product_id' => 16,
        ]);

        // 17
        DB::table("images")->insert([
            'src' => '/images/products/product_17.png',
            'product_id' => 17,
        ]);

        // 18
        DB::table("images")->insert([
            'src' => '/images/products/product_18.png',
            'product_id' => 18,
        ]);

        // 19
        DB::table("images")->insert([
            'src' => '/images/products/product_19.jpg',
            'product_id' => 19,
        ]);

        // 20
        DB::table("images")->insert([
            'src' => '/images/products/product_20.jpg',
            'product_id' => 20,
        ]);

        // 21
        DB::table("images")->insert([
            'src' => '/images/products/product_21.jpg',
            'product_id' => 21,
        ]);

        // 22
        DB::table("images")->insert([
            'src' => '/images/products/product_22.jpg',
            'product_id' => 22,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_22_2.jpg',
            'product_id' => 22,
        ]);

        // 23
        DB::table("images")->insert([
            'src' => '/images/products/product_23.jpg',
            'product_id' => 23,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_23_2.jpg',
            'product_id' => 23,
        ]);

        // 24
        DB::table("images")->insert([
            'src' => '/images/products/product_24.jpg',
            'product_id' => 24,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_24_2.jpg',
            'product_id' => 24,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_24_3.jpg',
            'product_id' => 24,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_24_4.jpg',
            'product_id' => 24,
        ]);

        // 25
        DB::table("images")->insert([
            'src' => '/images/products/product_25.jpg',
            'product_id' => 25,
        ]);

        // 26
        DB::table("images")->insert([
            'src' => '/images/products/product_26.jpg',
            'product_id' => 26,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_26_2.jpg',
            'product_id' => 26,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_26_3.jpg',
            'product_id' => 26,
        ]);

        // 27
        DB::table("images")->insert([
            'src' => '/images/products/product_27.jpg',
            'product_id' => 27,
        ]);

        // 28
        DB::table("images")->insert([
            'src' => '/images/products/product_28.jpg',
            'product_id' => 28,
        ]);
        DB::table("images")->insert([
            'src' => '/images/products/product_28_2.jpg',
            'product_id' => 28,
        ]);
    }
}
