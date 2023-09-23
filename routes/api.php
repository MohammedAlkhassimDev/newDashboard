
<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\FrontController;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::controller(AuthController::class)->group(function ($router) {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout')->middleware('auth:api');
    Route::post('refresh', 'refresh');
});


Route::group(["middleware" => ["auth:api", "changeLang"]], function ($router) {
    Route::get('index', [FrontController::class, 'index']);

    Route::get('categories',[FrontController::class, 'allMainCategory']);
    Route::get('categories/{id}/sub_categories_parent_id',[FrontController::class, 'getChildCtegoryByParentId']);
    
    Route::get('products',[FrontController::class, 'allProducts']);
    Route::get('products_by_category_id/{id}' , [FrontController::class, 'getProductsByCatId']);
    Route::get('product_by_sub_category_id/{id}' , [FrontController::class, 'getProductsBySubCatId']);


});