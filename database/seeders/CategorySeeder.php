<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Body Wash',
                'image_path' => 'categories/body_wash.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shampoo',
                'image_path' => 'categories/shampoo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Facial Wash',
                'image_path' => 'categories/facial_wash.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Serum',
                'image_path' => 'categories/serum.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
