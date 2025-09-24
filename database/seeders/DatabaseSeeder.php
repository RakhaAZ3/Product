<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Product::create([
        //         'name'=>'Basreng',
        //         'description'=>'Basreng Enak Dan Gurih',
        //         'price'=>3000,
        //         'stock'=>5000,
        // ]);

        $this->call([
            PostsTableSeeder::class,
            SiswasTableSeeder::class,
            BiodatasTableSeeder::class,
            ProductTableSeeder::class
        ]);
    }
}
