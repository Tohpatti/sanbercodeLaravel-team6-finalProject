<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function redirect(){

        $productsQuery = Product::with('types');

        $products = Product::displayProductsAtHome();

        $products = $products->map(function ($item) {
            return (object) $item;
        });
        return view('pages.home', compact('products'));
    }
}