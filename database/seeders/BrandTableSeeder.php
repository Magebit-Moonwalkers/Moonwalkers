<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->delete();

        DB::table("brands")->insert([
            'name' => 'Omegon',
        ]);
        DB::table("brands")->insert([
            'name' => 'National geographic',
        ]);
        DB::table("brands")->insert([
            'name' => 'Vixen',
        ]);
        DB::table("brands")->insert([
            'name' => 'Lunt',
        ]);
        DB::table("brands")->insert([
            'name' => 'Acuter',
        ]);
        DB::table("brands")->insert([
            'name' => 'Bresser',
        ]);

    }
}
