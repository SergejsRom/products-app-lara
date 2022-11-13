<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

            'SKU' => str_random(10),
            'name' => str_random(10),
            'price' => str_random(10),
            'attributes' => str_random(10),
            'values' => json_encode(["2"]),
            'att_value_name' => json_encode(["3"]),
        ]);
    }
}
