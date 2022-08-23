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
        ]);
        DB::table("categories")->insert([
            'name' => 'Mountings',
        ]);
        DB::table("categories")->insert([
            'name' => 'Eyepieces',
        ]);
        DB::table("categories")->insert([
            'name' => 'Barlow lenses',
        ]);
        DB::table("categories")->insert([
            'name' => 'Bags',
        ]);
        DB::table("categories")->insert([
            'name' => 'Filters',
        ]);

    }
}
