<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = ['Shampoo', 'Facial wash', 'Body lotion', 'Essential Oils'];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}