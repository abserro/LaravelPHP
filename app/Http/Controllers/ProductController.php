<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController
{
    public function show($code)
    {
        $product = Product::where('code', $code)->first();

        if (!$product) {
            abort(404); // Отправляем ошибку 404, если товар не найден
        }

        return view('products.show', compact('product'));
    }
}
