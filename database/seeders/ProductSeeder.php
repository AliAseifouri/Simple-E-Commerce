<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Super General Fridge',
            'price'=>'1000',
            'description'=>'A Smart fridge for show',
            'category'=>'fridge',
            'gallery'=>'https://cdn.sharafdg.com/cdn-cgi/image/width=600,height=600,fit=pad/assets/1/a/6/6/1a667fb8a995948e6ed36d9585225b6646704405_d47e6331a912a17e7f5ccde7bc1a6b86063a7f64_click_..jpg?g=0'
        ]);
        DB::table('products')->insert([
            'name'=>'Samsung Top Fridge',
            'price'=>'1200',
            'description'=>'A Fridge for call',
            'category'=>'fridge',
            'gallery'=>'https://cdn.sharafdg.com/cdn-cgi/image/width=600,height=600,fit=pad/assets/a/6/9/7/a697ca2b367609958ada7adcfbebe6936a9dd2f7_RT50K5030S8.jpg?g=0'
        ]);

    }
}
