<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductContrller;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

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
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('admin/dashboard', [DashboardController::class, 'index']);
        Route::get('admin/category', [DashboardController::class, 'category']);
        Route::get('admin/cat/delete/{id}', [DashboardController::class, 'DeleteCategory']);
        Route::get('admin/carts', [DashboardController::class, 'carts']);
        Route::get('admin/products', [DashboardController::class, 'products']);
        Route::post('admin/products', [DashboardController::class, 'products']);
        Route::post('admin/add-parent', [DashboardController::class, 'StoreParent']);
        Route::post('admin/add-category', [DashboardController::class, 'StoreCategory']);

        //item

        Route::get('admin/add-product', [ProductContrller::class, 'AddProduct']);
        Route::post('admin/add-product', [ProductContrller::class, 'StoreProduct']);
        Route::get('admin/products', [ProductContrller::class, 'ListProduct']);
        Route::get('admin/products/delete/{id}', [ProductContrller::class, 'DeleteProduct']);


    });

});

Route::get('/', [UserController::class, 'index']);
Route::get('/product-list', [UserController::class, 'product']);
Route::get('/detail/{id}', [UserController::class, 'detail']);
Route::get('/cart', [CartController::class, 'cart']);
Route::post('add-cart/{id}', [CartController::class, 'addCart']);
