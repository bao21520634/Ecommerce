<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $categories = Category::all();
        foreach ($products as $product) {
            foreach ($categories as $category) {
                if (str_contains($product->title, $category->name)) {
                    ProductCategory::create([
                        'product_id' => $product->id,
                        'category_id' => $category->id,
                    ]);
                }
            }
        }
    }
}
