<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;

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
