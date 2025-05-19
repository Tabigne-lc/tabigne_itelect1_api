<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['Apple iPhone 14', 'Latest model with A15 Bionic chip and improved battery life.', 1],
            ['Samsung Galaxy S23', 'Flagship Android phone with powerful performance and camera.', 1],
            ['Sony WH-1000XM5 Headphones', 'Noise-cancelling over-ear headphones with premium sound quality.', 3],
            ['Dell XPS 13 Laptop', 'Compact and powerful ultrabook with 13-inch InfinityEdge display.', 5],
            ['Canon EOS R5 Camera', 'Professional mirrorless camera with 8K video recording.', 5],
            ['Apple MacBook Air M2', 'Lightweight laptop with Apple Silicon and all-day battery life.', 5],
            ['Bose SoundLink Speaker', 'Portable Bluetooth speaker with deep bass and long battery life.', 5],
            ['Logitech MX Master 3 Mouse', 'Ergonomic mouse designed for productivity and comfort.', 3],
            ['Samsung 55" 4K Smart TV', 'Ultra HD smart TV with vivid colors and built-in streaming apps.', 6],
            ['Amazon Echo Dot 5th Gen', 'Smart speaker with Alexa voice assistant and improved audio.', 5],
            ['Microsoft Surface Pro 9', '2-in-1 tablet and laptop with sleek design and pen support.', 5],
            ['Razer BlackWidow Keyboard', 'Mechanical gaming keyboard with RGB lighting.', 7],
            ['Anker PowerCore Power Bank', 'High-capacity portable charger with USB-C and fast charging.', 3],
            ['ASUS ROG Strix GPU', 'High-performance graphics card for serious gaming and rendering.', 7],
            ['JBL Flip 6 Bluetooth Speaker', 'Waterproof and portable speaker with bold sound.', 5],
            ['Google Pixel 8', 'Clean Android experience with excellent camera features.', 1],
            ['Fitbit Charge 6', 'Fitness tracker with heart rate monitor and sleep tracking.', 2],
            ['WD 1TB External HDD', 'Reliable external hard drive for backup and storage.', 3],
            ['TP-Link WiFi 6 Router', 'High-speed wireless router for home and office use.', 5],
            ['Sony PlayStation 5', 'Next-gen gaming console with immersive graphics and fast load times.', 7],
        ];

        foreach ($products as $index => [$name, $description, $categoryId]) {
            Product::create([
                'name' => $name,
                'description' => $description,
                'category_id' => $categoryId,
                'user_id' => $index % 2 === 0 ? 1 : 2,
                'price' => rand(5000, 30000),
                'image_path' => null,
            ]);
        }
    }
}

