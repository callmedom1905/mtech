<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            // Mac
            [
                'name' => 'MacBook Air 13 inch M4',
                'price' => 999.00,
                'image' => 'macbook-air-13-inch.jpeg',
                'description' => '10-Core CPU, 8-Core GPU, 16GB Unified Memory, 256GB SSD Storage',
                'quantity' => 10,
                'category_id' => 1,
            ],
            [
                'name' => 'MacBook Air 15 inch M4',
                'price' => 1199.00,
                'image' => 'macbook-air-15-inch.jpeg',
                'description' => '10-Core CPU, 8-Core GPU, 16GB Unified Memory, 256GB SSD Storage',
                'quantity' => 10,
                'category_id' => 1,
            ],
            [
                'name' => 'MacBook Pro 14 inch M4',
                'price' => 1599.00,
                'image' => 'macbook-pro-14-inch.jpeg',
                'description' => '10-Core CPU, 10-Core GPU, 16GB Unified Memory, 512GB SSD Storage',
                'quantity' => 10,
                'category_id' => 1,
            ],
            [
                'name' => 'MacBook Pro 16 inch M4',
                'price' => 2499.00,
                'image' => 'macbook-pro-16-inch.jpeg',
                'description' => '14-Core CPU, 20-Core GPU, 24GB Unified Memory, 512GB SSD Storage',
                'quantity' => 10,
                'category_id' => 1,
            ],
            // iPhone
            [
                'name' => 'iPhone 16 Pro',
                'price' => 999.00,
                'image' => 'iphone16-pro.webp',
                'description' => '6.3-inch display',
                'quantity' => 10,
                'category_id' => 2,
            ],
            [
                'name' => 'iPhone 16 Pro Max',
                'price' => 1199.00,
                'image' => 'iphone16-pro-max.webp',
                'description' => '6.9-inch display',
                'quantity' => 10,
                'category_id' => 2,
            ],
            [
                'name' => 'iPhone 16',
                'price' => 799.00,
                'image' => 'iphone16.webp',
                'description' => '6.1-inch display',
                'quantity' => 10,
                'category_id' => 2,
            ],
            [
                'name' => 'iPhone 16 Plus',
                'price' => 899.00,
                'image' => 'iphone16-plus.webp',
                'description' => '6.7-inch display',
                'quantity' => 10,
                'category_id' => 2,
            ],
            //iPad
            [
                'name' => 'iPad Pro 11-inch model',
                'price' => 999.00,
                'image' => 'ipad-pro.webp',
                'description' => 'Ultra Retina XDR display',
                'quantity' => 10,
                'category_id' => 3,
            ],
            [
                'name' => 'iPad Pro 13-inch model',
                'price' => 1299.00,
                'image' => 'ipad-pro.webp',
                'description' => 'Ultra Retina XDR display',
                'quantity' => 10,
                'category_id' => 3,
            ],
            [
                'name' => 'iPad Air 11-inch model',
                'price' => 599.00,
                'image' => 'ipad-air.webp',
                'description' => '',
                'quantity' => 10,
                'category_id' => 3,
            ],
            [
                'name' => 'iPad Air 13-inch model',
                'price' => 799.00,
                'image' => 'ipad-air.webp',
                'description' => '',
                'quantity' => 10,
                'category_id' => 3,
            ],
            //AirPods
            [
                'name' => 'AirPods 4',
                'price' => 129.00,
                'image' => 'airpods4.jpeg',
                'description' => '',
                'quantity' => 10,
                'category_id' => 4,
            ],
            [
                'name' => 'AirPods 4 with Active Noise Cancellation',
                'price' => 179.00,
                'image' => 'airpods4-anc.jpeg',
                'description' => '',
                'quantity' => 10,
                'category_id' => 4,
            ],
            [
                'name' => 'AirPods Pro 2',
                'price' => 249.00,
                'image' => 'airpods-pro-2.jpeg',
                'description' => '',
                'quantity' => 10,
                'category_id' => 4,
            ],
            [
                'name' => 'AirPods Max',
                'price' => 549.00,
                'image' => 'airpods-max.jpeg',
                'description' => '',
                'quantity' => 10,
                'category_id' => 4,
            ],


        ]);
    }
}
