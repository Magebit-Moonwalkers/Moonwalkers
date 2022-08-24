<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->delete();

        DB::table("attributes")->insert([
            'name' => 'magnification',
        ]);
        DB::table("attributes")->insert([
            'name' => 'focal_length',
        ]);
        DB::table("attributes")->insert([
            'name' => 'area_of_application',
        ]);
        DB::table("attributes")->insert([
            'name' => 'aperture',
        ]);
        DB::table("attributes")->insert([
            'name' => 'mounting_type',
        ]);
        DB::table("attributes")->insert([
            'name' => 'manufaturer',
        ]);
        DB::table("attributes")->insert([
            'name' => 'max_additional_load_capacity',
        ]);
        DB::table("attributes")->insert([
            'name' => 'material_tripod',
        ]);
        DB::table("attributes")->insert([
            'name' => 'mounting_type',
        ]);
        DB::table("attributes")->insert([
            'name' => 'total_weight',
        ]);
        DB::table("attributes")->insert([
            'name' => 'max_height',
        ]);
        DB::table("attributes")->insert([
            'name' => 'apparent_field_of_view',
        ]);
        DB::table("attributes")->insert([
            'name' => 'connection',
        ]);
        DB::table("attributes")->insert([
            'name' => 'fits_to',
        ]);
        DB::table("attributes")->insert([
            'name' => 'shape',
        ]);
        DB::table("attributes")->insert([
            'name' => 'dimensions',
        ]);
        DB::table("attributes")->insert([
            'name' => 'material',
        ]);
        DB::table("attributes")->insert([
            'name' => 'colour',
        ]);

    }
}
