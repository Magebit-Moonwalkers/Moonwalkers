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

        // Telescopes

        DB::table("products")->insert([
            'name' => 'Celestron PowerSeeker 40 AZ telescope',
            'product_code' => '821598',
            'price' => 54.95,
            'quantity' => 2,
            'brand_id' => 7,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Celestron TRAVEL 50 telescope',
            'product_code' => '822036',
            'price' => 85.00,
            'quantity' => 1,
            'brand_id' => 7,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Omegon AC 70/400 Solar AZ BackPack telescope',
            'product_code' => '53090',
            'price' => 129.00,
            'quantity' => 3,
            'brand_id' => 1,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Celestron Travel Scope 70 ”Solar system edition” telescope',
            'product_code' => '822035S',
            'price' => 175.00,
            'quantity' => 1,
            'brand_id' => 7,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Bresser Solarix AZ 76/350 telescope',
            'product_code' => '4676359',
            'price' => 112.00,
            'quantity' => 1,
            'brand_id' => 6,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Bresser Junior 76/300 Compact Smart telescope',
            'product_code' => '8843205',
            'price' => 114.90,
            'quantity' => 5,
            'brand_id' => 6,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Omegon N 114/500 EQ-1 telescope',
            'product_code' => '49506',
            'price' => 199.00,
            'quantity' => 2,
            'brand_id' => 1,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Bresser Nano NT-114/500 telescope',
            'product_code' => '4514500',
            'price' => 219.00,
            'quantity' => 2,
            'brand_id' => 6,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Sky-Watcher Skyliner-250PX FlexTube telescope',
            'product_code' => '10157',
            'price' => 855.00,
            'quantity' => 1,
            'brand_id' => 8,
            'category_id' => 1,
        ]);

        DB::table("products")->insert([
            'name' => 'Sky-Watcher Skyliner-250PX 10” Parabolic telescope',
            'product_code' => '10668',
            'price' => 739.00,
            'quantity' => 1,
            'brand_id' => 8,
            'category_id' => 1,
        ]);

        // Mountings

        DB::table("products")->insert([
            'name' => 'Sky-Watcher AZ3 Altazimuth mount',
            'product_code' => '20446',
            'price' => 169.00,
            'quantity' => 10,
            'brand_id' => 8,
            'category_id' => 2,
        ]);

        DB::table("products")->insert([
            'name' => 'Sky-Watcher AZ5 Deluxe Alt-Azimuth mount',
            'product_code' => '20311',
            'price' => 329.00,
            'quantity' => 2,
            'brand_id' => 8,
            'category_id' => 2,
        ]);

        DB::table("products")->insert([
            'name' => 'Sky-Watcher EQ2 Equatorial mount',
            'product_code' => '20447',
            'price' => 195.00,
            'quantity' => 5,
            'brand_id' => 8,
            'category_id' => 2,
        ]);

        DB::table("products")->insert([
            'name' => 'Sky-watcher EQM-35 GoTo Equatorial mounting system SynScan PRO',
            'product_code' => '20980',
            'price' => 876.00,
            'quantity' => 1,
            'brand_id' => 8,
            'category_id' => 2,
        ]);

        // Eyepieces

        DB::table("products")->insert([
            'name' => 'Sky-Watcher Super-MA 25mm (1.25") eyepiece',
            'product_code' => '20956',
            'price' => 20.00,
            'quantity' => 10,
            'brand_id' => 8,
            'category_id' => 3,
        ]);

        DB::table("products")->insert([
            'name' => 'Sky-Watcher Super Plossl 17mm (1.25") eyepiece',
            'product_code' => '20370',
            'price' => 30.00,
            'quantity' => 2,
            'brand_id' => 8,
            'category_id' => 3,
        ]);

        DB::table("products")->insert([
            'name' => 'Sky-Watcher SWA-70 3.5mm (2" & 1.25") eyepiece',
            'product_code' => '20958',
            'price' => 85.00,
            'quantity' => 1,
            'brand_id' => 8,
            'category_id' => 3,
        ]);

        DB::table("products")->insert([
            'name' => 'Sky-Watcer PanaView 26mm (2") eyepiece',
            'product_code' => '20185',
            'price' => 113.00,
            'quantity' => 1,
            'brand_id' => 8,
            'category_id' => 3,
        ]);

        // Barlow lenses

        DB::table("products")->insert([
            'name' => 'Sky-Watcher 1.25" 2x Deluxe Barlow lens',
            'product_code' => '20364',
            'price' => 39.00,
            'quantity' => 3,
            'brand_id' => 8,
            'category_id' => 4,
        ]);

        DB::table("products")->insert([
            'name' => 'Bresser 1.25” 5x Barlow lens',
            'product_code' => '4950115',
            'price' => 49.90,
            'quantity' => 4,
            'brand_id' => 6,
            'category_id' => 4,
        ]);

        DB::table("products")->insert([
            'name' => '
            Sky-Watcher 2x Super Deluxe ED Barlow Lens (2" & 1.25")',
            'product_code' => '20966',
            'price' => 94.00,
            'quantity' => 1,
            'brand_id' => 8,
            'category_id' => 4,
        ]);

        // Bags

        DB::table("products")->insert([
            'name' => 'OKLOP padded bag for 120/600 refractors',
            'product_code' => '61315',
            'price' => 49.90,
            'quantity' => 7,
            'brand_id' => 9,
            'category_id' => 5,
        ]);

        DB::table("products")->insert([
            'name' => 'OKLOP padded bag for EQ6/NEQ6/AZEQ6 tripods',
            'product_code' => '61304',
            'price' => 49.90,
            'quantity' => 7,
            'brand_id' => 9,
            'category_id' => 5,
        ]);

        DB::table("products")->insert([
            'name' => 'OKLOP padded bag for small telescopes',
            'product_code' => '61308',
            'price' => 59.00,
            'quantity' => 2,
            'brand_id' => 9,
            'category_id' => 5,
        ]);

        // Filters

        DB::table("products")->insert([
            'name' => 'Bresser 1.25” Color Filter Set Essential',
            'product_code' => '0310290',
            'price' => 14.90,
            'quantity' => 15,
            'brand_id' => 6,
            'category_id' => 6,
        ]);

        DB::table("products")->insert([
            'name' => 'Explore Scientific Sun Catcher Solar Filter for 110-130mm Telescopes',
            'product_code' => '0310290',
            'price' => 14.90,
            'quantity' => 15,
            'brand_id' => 2,
            'category_id' => 6,
        ]);

        DB::table("products")->insert([
            'name' => 'Sky-Watcher (1.25") light pollution filter',
            'product_code' => '20198',
            'price' => 29.00,
            'quantity' => 2,
            'brand_id' => 8,
            'category_id' => 6,
        ]);

        DB::table("products")->insert([
            'name' => 'Explore Scientific 1.25” UHC Nebula filter',
            'product_code' => '0310215',
            'price' => 58.00,
            'quantity' => 1,
            'brand_id' => 2,
            'category_id' => 6,
        ]);
    }
}
