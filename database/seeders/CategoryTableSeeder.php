<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            'name' => 'Telescopes',
            'image_src' => '/images/categories/telescope.jpg',
        ]);
        DB::table("categories")->insert([
            'name' => 'Mountings',
            'image_src' => '/images/categories/mounting.jpg',
        ]);
        DB::table("categories")->insert([
            'name' => 'Eyepieces',
            'image_src' => '/images/categories/eyepiece.png',
        ]);
        DB::table("categories")->insert([
            'name' => 'Barlow lenses',
            'image_src' => '/images/categories/barlow_lense.jpg',
        ]);
        DB::table("categories")->insert([
            'name' => 'Bags',
            'image_src' => '/images/categories/bag.jpg',
        ]);
        DB::table("categories")->insert([
            'name' => 'Filters',
            'image_src' => '/images/categories/filter.jpg',
        ]);

    }
}
