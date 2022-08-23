<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/products', function () {
    $products = DB::table('products')->get();
    return view('admin-products', compact('products'));
})->name('modify-products');

Route::put('/products', function () {
    $products = DB::table('products')->get();
    return view('admin-products', compact('products'));
})->name('modify-products');

Route::post('/products', function () {
    $products = DB::table('products')->get();
    return view('admin-products', compact('products'));
})->name('modify-products');

Route::get('/add-product', function () {
    return view('admin-addProductForm');
})->name('add-product');

Route::get('product/{id}',[ProductController::class, 'showById'])->name('product.show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');