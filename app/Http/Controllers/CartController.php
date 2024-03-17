<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function showCart()
    {
        $orders = Order::all();

        return view('sections.shop_cart', compact('orders'));
    }

    public function addToCart(Request $request)
    {
        Log::info('Product ID received: ' . $request->product_id);

        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        Log::info('Product ID received before insert: ' . $request->product_id);
        
        $order = Order::create([
            'product_id' => $request->product_id,
        ]);

        Log::info('Product ID received after insert: ' . $request->product_id);

        // return response()->json(['message' => 'Product added to cart']);
        return redirect()->back()->with('success', 'Product added to cart');
    }
}
