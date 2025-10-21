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
            ],                   
            [
                'name'=>'Cireng',
                'description'=>'Cireng Enak Dan Gurih',
                'price'=>2000,
                'stock'=>5000,
            ],                   
            [
                'name'=>'Cimol',
                'description'=>'Cimol Enak Dan Gurih',
                'price'=>1000,
                'stock'=>5000,
            ],                   
            [
                'name'=>'Cilor',
                'description'=>'Cilor Enak Dan Gurih',
                'price'=>3000,
                'stock'=>4000,
            ],                   
            [
                'name'=>'Tahu Bulat',
                'description'=>'Tahu Bulat Enak Dan Gurih',
                'price'=>3000,
                'stock'=>3000,
            ],                   
            [
                'name'=>'Batagor',
                'description'=>'Batagor Enak Dan Gurih',
                'price'=>3000,
                'stock'=>2000,
            ],                   
            [
                'name'=>'Nasi Goreng',
                'description'=>'Nasi Goreng Enak Dan Gurih',
                'price'=>3000,
                'stock'=>1000,
            ],                   
            [
                'name'=>'Baso',
                'description'=>'Baso Enak Dan Gurih',
                'price'=>2000,
                'stock'=>4000,
            ],                   
            [
                'name'=>'Nugget',
                'description'=>'Nugget Enak Dan Gurih',
                'price'=>1000,
                'stock'=>3000,
            ],                   
            [
                'name'=>'Mie Goreng',
                'description'=>'Mie Goreng Enak Dan Gurih',
                'price'=>10000,
                'stock'=>5000,
            ]
        ]);
    }
}
