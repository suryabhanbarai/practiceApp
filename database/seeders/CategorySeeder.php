<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'parent_category_id' => null],
            ['name' => 'Mobile Phones', 'parent_category_id' => 1],
            ['name' => 'Laptops', 'parent_category_id' => 1],
            ['name' => 'Televisions', 'parent_category_id' => 1],
            ['name' => 'Home Appliances', 'parent_category_id' => null],
            ['name' => 'Refrigerators', 'parent_category_id' => 5],
            ['name' => 'Washing Machines', 'parent_category_id' => 5],
            ['name' => 'Furniture', 'parent_category_id' => null],
            ['name' => 'Sofas', 'parent_category_id' => 8],
            ['name' => 'Beds', 'parent_category_id' => 8],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
