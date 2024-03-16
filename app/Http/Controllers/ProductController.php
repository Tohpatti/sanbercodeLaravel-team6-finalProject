<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('pages.shop', compact('products'));
    }
    
    public function show($category_id)
    {
        $products = Product::all()->where('category_id', $category_id)->get();

        return view('pages.shop', compact('products'));
    }
}
