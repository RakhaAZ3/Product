<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=>'Basreng',
                'description'=>'Basreng Enak Dan Gurih',
                'price'=>3000,
                'stock'=>5000,
            ]                   
        ]);
    }
}
