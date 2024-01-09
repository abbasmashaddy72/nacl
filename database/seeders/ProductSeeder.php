<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public const SAMPLE_MAP = [
        'apple' => [
            'phone' => [
                'iPhone 12',
                'iPhone 12 Pro',
                'iPhone SE',
            ],
            'tablet' => [
                'iPad Pro',
                'iPad Air',
                'iPad',
            ],
            'laptop' => [
                'MacBook Pro',
                'MacBook Air',
                'MacBook',
            ],
        ],
        'samsung' => [
            'phone' => [
                'Galaxy S21',
                'Galaxy S21 Ultra',
            ],
            'tablet' => [
                'Galaxy Tab S7',
                'Galaxy Tab S6 Lite',
            ],
            'laptop' => [
                'Galaxy Book Flex',
                'Galaxy Book Ion',
                'Galaxy Book S',
            ],
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = \App\Models\Brand::all();

        foreach ($brands as $brand) {
            $products = \App\Models\Product::factory(rand(2, 5))->create([
                'brand_id' => $brand->id,
            ]);

            // Attach random categories to each product
            $categories = \App\Models\Category::inRandomOrder()->limit(rand(1, 3))->get();

            foreach ($products as $product) {
                $product->categories()->attach($categories->pluck('id')->toArray());
            }
        }
    }
}
