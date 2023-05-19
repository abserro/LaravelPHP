<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->truncate();
        DB::table('products')->truncate();
        for ($i = 0; $i < 100; $i++) {
            Category::factory()->count(1)->create();
        }
        Product::factory()->count(100)->create();
    }
}
