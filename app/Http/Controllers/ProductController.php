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
            ['name' => 'Pasta', 'price' => 11.49],
            ['name' => 'Salad', 'price' => 7.99],
            ['name' => 'Tacos', 'price' => 8.49],
            ['name' => 'Steak', 'price' => 22.99],
            ['name' => 'Ice Cream', 'price' => 4.99],
            ['name' => 'Fries', 'price' => 3.49],
            ['name' => 'Chicken Wings', 'price' => 10.99],
            ['name' => 'Nachos', 'price' => 6.99],
            ['name' => 'Seafood Platter', 'price' => 25.99],
            ['name' => 'Cheesecake', 'price' => 5.99],
            ['name' => 'BBQ Ribs', 'price' => 18.99],
            ['name' => 'Vegetable Stir Fry', 'price' => 8.49],
            ['name' => 'Quiche', 'price' => 7.49],
            ['name' => 'Caprese Salad', 'price' => 8.99],
        ];

        return view('products.index', compact('products'));
    }
}

