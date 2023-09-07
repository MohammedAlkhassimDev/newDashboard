<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([

    'middleware' => ['api', 'changeLang'],

], function ($router) {
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
        Route::post('register', 'register');
        Route::post('logout', 'logout');
        Route::post('refresh', 'refresh');
    });

    

    Route::controller(CategoryController::class)->group(function () {
        // Route::group(['middleware' => 'api'], function () {
        Route::post('categories', 'index');
        // Route::post('category', 'CategoryController@getCategory');
        // Route::post('change-category-active', 'CategoryController@changeActive');
        // Route::post('products',  'ProductController@index');
    });
});




Route::controller(CategoryController::class)->group(function () {
    // Route::group(['middleware' => 'api'], function () {
    Route::post('categories', 'index');
    // Route::post('category', 'CategoryController@getCategory');
    // Route::post('change-category-active', 'CategoryController@changeActive');
    // Route::post('products',  'ProductController@index');
});
