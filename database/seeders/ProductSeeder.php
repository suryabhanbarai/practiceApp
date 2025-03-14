<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'iPhone 15', 'description' => 'Latest Apple smartphone', 'sku' => 'IP15-001', 'price' => 999.99, 'category_id' => 2],
            ['name' => 'Samsung Galaxy S23', 'description' => 'Flagship Samsung phone', 'sku' => 'SGS23-002', 'price' => 899.99, 'category_id' => 2],
            ['name' => 'MacBook Pro', 'description' => 'Apple laptop with M2 chip', 'sku' => 'MBP-001', 'price' => 1999.99, 'category_id' => 3],
            ['name' => 'Dell XPS 15', 'description' => 'Premium Dell laptop', 'sku' => 'DXPS15-003', 'price' => 1799.99, 'category_id' => 3],
            ['name' => 'Sony Bravia OLED TV', 'description' => 'High-definition television', 'sku' => 'SBTV-004', 'price' => 2499.99, 'category_id' => 4],
            ['name' => 'LG Refrigerator', 'description' => 'Double door fridge', 'sku' => 'LGFR-005', 'price' => 1099.99, 'category_id' => 6],
            ['name' => 'Bosch Washing Machine', 'description' => 'Front load washing machine', 'sku' => 'BOSCHWM-006', 'price' => 799.99, 'category_id' => 7],
            ['name' => 'Leather Sofa', 'description' => 'Premium quality sofa set', 'sku' => 'LSOFA-007', 'price' => 1299.99, 'category_id' => 9],
            ['name' => 'King Size Bed', 'description' => 'Wooden bed with storage', 'sku' => 'KSBED-008', 'price' => 1499.99, 'category_id' => 10],
            ['name' => 'Samsung Smart Fridge', 'description' => 'AI-powered refrigerator', 'sku' => 'SSFRIDGE-009', 'price' => 2499.99, 'category_id' => 6],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
