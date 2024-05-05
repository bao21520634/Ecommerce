<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode(File::get(public_path('/data/product_data.json')), true);

        foreach ($data as $product) {
            Product::create([
                'id' => $product["id"],
                'title' => $product["name"],
                'description' => $product["description"],
                'price' => $product["original_price"],
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
                'published' => true
            ]);

            foreach ($product["images"] as $productImage) {
                ProductImage::create([
                    'product_id' => $product["id"],
                    'path' => "path",
                    'url' => $productImage["base_url"],
                    'mime' => "image/jpeg",
                    'size' => 12345,
                    'position' => 1
                ]);
            }
        }
    }
}
