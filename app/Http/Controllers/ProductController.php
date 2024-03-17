<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{   
    public function showProduct($id)
    {
        $mainProducts = Product::where('id', $id)->get();
        $products = Product::all()->take(4);
        return view('sections.product_details', compact('mainProducts', 'products'));
    }
}
