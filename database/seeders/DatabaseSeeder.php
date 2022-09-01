<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\CategoryProduct;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed product category table
        for ($i=1; $i <= 5; $i++) {
            $categoryProduct = new CategoryProduct;
            $categoryProduct->category_name = "category_{$i}";
            $categoryProduct->save();
        }

        // Seed product table
        for ($i=1; $i <= 10; $i++) { 
            $product = new Product;
            $product->product_name = "product_{$i}";
            $product->price = rand(10000, 200000);
            $product->stock = rand(0, 1000);
            $product->category_id = rand(1, 5);
            $product->save();
        }
    }
}
