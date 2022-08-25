<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_attributes')->delete();

        DB::table("product_attributes")->insert([
            'product_id' => 1,
            'attribute_id' => 2,
            'attribute_value' => '500',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 1,
            'attribute_id' => 3,
            'attribute_value' => 'Moon and planets',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 1,
            'attribute_id' => 4,
            'attribute_value' => '40',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 1,
            'attribute_id' => 5,
            'attribute_value' => 'Azimuthal',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 1,
            'attribute_id' => 8,
            'attribute_value' => 'Aluminium',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 1,
            'attribute_id' => 19,
            'attribute_value' => 'Refractor',
        ]);

        //

        DB::table("product_attributes")->insert([
            'product_id' => 2,
            'attribute_id' => 2,
            'attribute_value' => '360',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 2,
            'attribute_id' => 3,
            'attribute_value' => 'Moon and planets',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 2,
            'attribute_id' => 4,
            'attribute_value' => '50',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 2,
            'attribute_id' => 5,
            'attribute_value' => 'Azimuthal',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 2,
            'attribute_id' => 8,
            'attribute_value' => 'Aluminium',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 2,
            'attribute_id' => 19,
            'attribute_value' => 'Refractor',
        ]);

        //
        
        DB::table("product_attributes")->insert([
            'product_id' => 3,
            'attribute_id' => 2,
            'attribute_value' => '400',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 3,
            'attribute_id' => 3,
            'attribute_value' => 'Moon and planets',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 3,
            'attribute_id' => 4,
            'attribute_value' => '70',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 3,
            'attribute_id' => 5,
            'attribute_value' => 'Azimuthal',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 3,
            'attribute_id' => 8,
            'attribute_value' => 'Aluminium',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 3,
            'attribute_id' => 19,
            'attribute_value' => 'Refractor',
        ]);

        //

        DB::table("product_attributes")->insert([
            'product_id' => 4,
            'attribute_id' => 2,
            'attribute_value' => '400',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 4,
            'attribute_id' => 3,
            'attribute_value' => 'Moon and planets',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 4,
            'attribute_id' => 4,
            'attribute_value' => '70',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 4,
            'attribute_id' => 5,
            'attribute_value' => 'Azimuthal',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 4,
            'attribute_id' => 8,
            'attribute_value' => 'Aluminium',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 4,
            'attribute_id' => 19,
            'attribute_value' => 'Refractor',
        ]);

        // Mounts

        DB::table("product_attributes")->insert([
            'product_id' => 11,
            'attribute_id' => 5,
            'attribute_value' => 'Azimuthal',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 11,
            'attribute_id' => 7,
            'attribute_value' => '5',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 11,
            'attribute_id' => 8,
            'attribute_value' => 'Aluminium',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 11,
            'attribute_id' => 10,
            'attribute_value' => '3.9',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 11,
            'attribute_id' => 11,
            'attribute_value' => '123',
        ]);

        //

        DB::table("product_attributes")->insert([
            'product_id' => 12,
            'attribute_id' => 5,
            'attribute_value' => 'Azimuthal',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 12,
            'attribute_id' => 7,
            'attribute_value' => '5',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 12,
            'attribute_id' => 8,
            'attribute_value' => 'Aluminium',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 12,
            'attribute_id' => 10,
            'attribute_value' => '4.9',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 12,
            'attribute_id' => 11,
            'attribute_value' => '158',
        ]);

        //

        DB::table("product_attributes")->insert([
            'product_id' => 13,
            'attribute_id' => 5,
            'attribute_value' => 'Equatorial',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 13,
            'attribute_id' => 7,
            'attribute_value' => '6',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 13,
            'attribute_id' => 8,
            'attribute_value' => 'Aluminium',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 13,
            'attribute_id' => 10,
            'attribute_value' => '7',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 13,
            'attribute_id' => 11,
            'attribute_value' => '123',
        ]);

        //

        DB::table("product_attributes")->insert([
            'product_id' => 14,
            'attribute_id' => 5,
            'attribute_value' => 'Equatorial',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 14,
            'attribute_id' => 8,
            'attribute_value' => 'Steel / Stainless steel',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 14,
            'attribute_id' => 10,
            'attribute_value' => '5.7',
        ]);

        // Eyepieces

        DB::table("product_attributes")->insert([
            'product_id' => 15,
            'attribute_id' => 2,
            'attribute_value' => '25',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 15,
            'attribute_id' => 12,
            'attribute_value' => '52',
        ]);

        DB::table("product_attributes")->insert([
            'product_id' => 15,
            'attribute_id' => 13,
            'attribute_value' => '1.25',
        ]);
    }
}
