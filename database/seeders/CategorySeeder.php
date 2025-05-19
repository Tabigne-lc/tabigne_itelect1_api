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
                'name' => 'Mobile and Gadgets',
                'image_path' => 'categories/mobile_and_gadgets.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wearables',
                'image_path' => 'categories/wearables.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Accessories',
                'image_path' => 'categories/accessories.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kitchen Appliances',
                'image_path' => 'categories/kitchen_appliances.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
