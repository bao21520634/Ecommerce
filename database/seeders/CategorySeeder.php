<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Dell', 'slug' => 'dell', 'active' => 1, 'created_by' => 1, 'updated_by' => 1, "created_at" =>  Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Acer', 'slug' => 'acer', 'active' => 1, 'created_by' => 1, 'updated_by' => 1, "created_at" =>  Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'HP', 'slug' => 'hp', 'active' => 1, 'created_by' => 1, 'updated_by' => 1, "created_at" =>  Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Lenovo', 'slug' => 'lenovo', 'active' => 1, 'created_by' => 1, 'updated_by' => 1, "created_at" =>  Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'MSI', 'slug' => 'msi', 'active' => 1, 'created_by' => 1, 'updated_by' => 1, "created_at" =>  Carbon::now(), "updated_at" => Carbon::now()],
        ];
        Category::insert($categories);
    }
}
