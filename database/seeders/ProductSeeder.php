<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['Hydrating Body Lotion', 'Moisturizes and nourishes dry skin.', 1],
            ['Clarifying Shampoo', 'Removes buildup and leaves hair fresh.', 2],
            ['Gentle Facial Wash', 'Cleanses skin without over-drying.', 3],
            ['Vitamin C Serum', 'Brightens skin and reduces dark spots.', 4],
            ['Soothing Aloe Lotion', 'Cools and hydrates irritated skin.', 1],
            ['Anti-Dandruff Shampoo', 'Fights dandruff and relieves itching.', 2],
            ['Acne Control Facial Wash', 'Helps clear acne and prevent breakouts.', 3],
            ['Hyaluronic Acid Serum', 'Deeply hydrates and plumps the skin.', 4],
            ['Whitening Body Lotion', 'Evens skin tone with natural extracts.', 1],
            ['Volumizing Shampoo', 'Adds volume and bounce to fine hair.', 2],
            ['Foaming Facial Cleanser', 'Gently removes oil and impurities.', 3],
            ['Retinol Serum', 'Reduces wrinkles and fine lines.', 4],
            ['Firming Body Lotion', 'Improves skin elasticity and tone.', 1],
            ['Herbal Shampoo', 'Infused with natural herbs for healthy scalp.', 2],
            ['Brightening Facial Wash', 'Enhances glow and removes dullness.', 3],
            ['Niacinamide Serum', 'Improves skin texture and tightens pores.', 4],
            ['Coconut Milk Shampoo', 'Softens and nourishes dry hair.', 2],
            ['Exfoliating Facial Scrub', 'Removes dead skin cells and unclogs pores.', 3],
            ['Collagen Boost Serum', 'Promotes firmness and youthful appearance.', 4],
            ['Calming Lavender Lotion', 'Relaxes and soothes sensitive skin.', 1],
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

