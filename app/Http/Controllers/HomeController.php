<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function redirect(){
        $products = Product::all()->take(8);
        
        return view('pages.home', compact('products'));
    }
}