<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController
{
    public function show($code)
    {
        $category = Category::where('code', $code)->where('active', true)->firstOrFail();
        $products = Product::where('category_id', $category->id)->paginate(10);

        return view('category.show', compact('category', 'products'));
    }

    public function filter(Request $request, $code)
    {
        $category = Category::where('code', $code)->where('active', true)->firstOrFail();
        $query = Product::where('category_id', $category->id);

        if ($request->has('min_price')) {
            $minPrice = $request->input('min_price');
            $query->where('price', '>=', $minPrice);
        }

        if ($request->has('max_price')) {
            $maxPrice = $request->input('max_price');
            $query->where('price', '<=', $maxPrice);
        }

        $products = $query->paginate(10);
        $filters = $request->only(['min_price', 'max_price']);

        return view('category.show', compact('category', 'products', 'filters'));
    }
}
