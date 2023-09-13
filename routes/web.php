<?php

use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\OrderController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/shop-category/{id}', [HomeController::class, 'shopWithOneCategory'])->name('shop.category');
Route::get('/product-detail/{slug}', [HomeController::class, 'detail'])->name('product.detail');
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');

//order
Route::post('/order' ,[OrderController::class , 'order'])->name('order.checkout');


// Cart functionality
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart/store', [CartController::class, 'cartStore'])->name('cart.store');
Route::post('/cart/delete', [CartController::class, 'cartDelete'])->name('cart.delete');

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/thank', [HomeController::class, 'thank'])->name('thank');

    });
