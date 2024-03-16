<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;


class PageController extends Controller
{
    public function index()
    {
        $products = Product::all()->take(8);
        
        return view('pages.home', compact('products'));
    }

    public function shop()
    {
        $products = Product::all();

        $productTypes = ProductType::all();

        return view('pages.shop', compact('products', 'productTypes'));
    }
}
