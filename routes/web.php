<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/blog-details', function () {
    return view('sections.blog_details');
})->name('blog_details');

Route::get('/product_details', function () {
    return view('sections.product_details');
})->name('product_details');

Route::get('/shop_cart', function () {
    return view('sections.shop_cart');
})->name('shop_cart');

Route::get('/checkout', function () {
    return view('sections.checkout');
})->name('checkout');


Route::get('/', [HomeController::class, 'redirect'])->name('home');

Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'redirect']);
});