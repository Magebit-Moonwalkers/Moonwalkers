<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    $categories = DB::table('categories')->get();
    $products = DB::table('products')->get();
    $images = DB::table('images')->get();
    return view('welcome', ['categories' => $categories, 'products' => $products, 'images' => $images]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', [CategoryController::class, 'show']);

Route::get('products/{category}', [ProductController::class, 'showAllProductsInCategory'])->name('products.in.category');

Route::get('products/{category}/{id}', [ProductController::class, 'showProduct'])->name('product');

Route::get('products/search/{id}', [ProductController::class, 'showSearchedProduct'])->name('search-product');

Route::get('search', [ProductController::class, 'showAllProductsForSearchRequest'])->name('products.for.search');

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/admin/products', function () {
    $products = DB::table('products')->get();
    $images=[];
    foreach ($products as $product) {
        $image = DB::table('images')->where('product_id', $product->product_id)->first();
        array_push($images, $image);
    }
    return view('admin-products')->with(compact('products'))->with(compact('images'));
})->name('modify-products')->middleware('admin');

Route::put('/admin/products', function () {
    $products = DB::table('products')->get();
})->name('modify-products');

Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');

Route::post('/admin/products', function () {
    $products = DB::table('products')->get();
    return view('admin-products', compact('products'));
})->name('modify-products');

Route::get('/admin/product/{id}',[ProductController::class, 'showById'])->name('admin.product.show');

Route::get('/admin/add-product', function () {
    $brandsContr = new BrandController();
    $brands = $brandsContr->index();

    $categoriesContr = new CategoryController();
    $categories = $categoriesContr->index();

    return view('admin-addProductForm')->with(compact('brands'))->with(compact('categories'));
})->name('add-product')->middleware('admin');

Route::post('/admin/add-product',[ProductController::class, 'store'])->name('admin.store');


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('product/add-to-cart/', [CartController::class, 'addToCart'])->name('cart.store');

Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove-from-cart/', [CartController::class, 'removeCart'])->name('cart.remove');

Route::post('clear/', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('product/{id}',[ProductController::class, 'showById'])->name('product.show');

Route::get('/checkout', function () {
    return view('billingAddress');
});

Route::post('checkout',[CheckoutController::class, 'saveBillingAddress'])->name('continue-checkout');

