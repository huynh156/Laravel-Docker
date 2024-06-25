<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class brandseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brand')->insert([
            'id' => rand(1,1000),
            'brandname' =>'SamSung'
        ]);
        DB::table('brand')->insert([
            'id' => rand(1,1000),
            'brandname' =>'Apple'
        ]);
        DB::table('brand')->insert([
            'id' => rand(1,1000),   
            'brandname' =>'LG'
        ]);
    }
}
