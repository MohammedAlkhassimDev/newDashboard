<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::prefix('dashboard')->name('dashboard.')->group(function () {

            Route::middleware('isAdmin')->group(function () {
                // Dashboard
                Route::get('/', [DashboardController::class, 'index'])->name('home');

                // Settings
                Route::get('/setting', [SettingController::class, 'index'])->name('setting');
                Route::post('/setting/update', [SettingController::class, 'update'])->name('setting.update');
                
                // Category
                Route::resource('/categories', CategoryController::class);
                // Ajax for sub category
                Route::post('/categories/{id}/child', [CategoryController::class, 'getChildByParent']);

                // Brand
                Route::resource('/brands', BrandController::class);

                // Products
                Route::resource('/products', ProductController::class);
                
                // Order
                Route::resource('/order', OrderController::class);
                // Route::get('orders', [OrderController::class,'index']) -> name ('order.index');
                // Route::get('order/create', [OrderController::class,'create']) -> name ('order.create');
                // Route::post('order/store', [OrderController::class,'store']) -> name ('order.store');
                // Route::get('order/edit', [OrderController::class,'edit']) -> name ('order.edit');
                // Route::post('order/update', [OrderController::class,'update']) -> name ('order.update');
                // Route::get('order/show', [OrderController::class,'show']) -> name ('order.show');
                // Route::post('order/destroy', [OrderController::class,'show']) -> name ('order.destroy');
            });

            require __DIR__ . '/adminAuth.php';
        });
    }
);
// Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    
    // Route::middleware('auth')->group(function () {
        //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
