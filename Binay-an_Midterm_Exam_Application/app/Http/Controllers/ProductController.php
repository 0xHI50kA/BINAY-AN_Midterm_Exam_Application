<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'iPhone 14', 'brand' => 'Apple', 'price' => 999],
            ['name' => 'Galaxy S23', 'brand' => 'Samsung', 'price' => 799],
            ['name' => 'MacBook Pro', 'brand' => 'Apple', 'price' => 1299],
            ['name' => 'PlayStation 5', 'brand' => 'Sony', 'price' => 499]
        ];

        return view('products.index', compact('products'));
    }
}
