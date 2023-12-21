<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MyObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<5; $i++) {
            DB::table('objectoftrades')->insert([
                'id'=>null,
                'name'=>"MyObject - ".$i,
                'type'=>"MyType - ".$i,
                'description'=>Lorem::text(100),
                'price'=>2.3*$i,
                'imagesPath'=>"https://sofa.ua/uploads/shop/products/medium/a07ccf0e9da3c2d8b30cb012cb38d4de.jpg"
            ]);
        }
    }
}
