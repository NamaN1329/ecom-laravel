<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i = 0;
        while($i < 20) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'price' => random_int(100,10000),
                'category_id' => random_int(1,4),
                'description' =>  Str::random(1000),
            ]);
            $i++;
        }
    }
}
