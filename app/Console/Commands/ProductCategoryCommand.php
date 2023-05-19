<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class ProductCategoryCommand extends Command
{
    protected $signature = 'product:category {id}';

    public function handle()
    {
        $productId = $this->argument('id');
        $product = Product::find($productId);

        if (!$product) {
            throw new \InvalidArgumentException('Product not found');
        }

        $categoryCode = $product->category->code;
        $this->info("Category Code for Product ID {$productId}: {$categoryCode}");
    }
}
