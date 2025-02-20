<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Pizza', 'price' => 12.99],
            ['name' => 'Burger', 'price' => 9.99],
            ['name' => 'Sushi', 'price' => 15.99],
        ];

        return view('products.index', compact('products'));
    }
}
