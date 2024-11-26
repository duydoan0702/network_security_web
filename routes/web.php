<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryProduct;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\User\UserController;

// Route tĩnh trả về các view
Route::view('/news', 'pages.news');
Route::view('/contract', 'pages.contract');

// Route trang chủ
Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [HomeController::class, 'index']);

// Route cho User
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/logIn', [UserController::class, 'logIn']);
    Route::post('/signUp', [UserController::class, 'signUp']);
    Route::get('/sendOTP', [UserController::class, 'sendOTP']);
    Route::post('/verificationCode', [UserController::class, 'sendVerificationCode']);
});

// Route cho Admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/logout', [AdminController::class, 'logout']);
    Route::post('/logIn',[AdminController::class , 'logIn']);
    Route::get('/show-dashboard', [AdminController::class, 'show_dashboard']);
});

// Route cho Product
    Route::get('/add_product',[ProductController::class, 'add_product']);
    Route::post('/save_product', [ProductController::class, 'save_product']);
    Route::get('/all_product', [ProductController::class, 'all_product']);
    Route::get('/unactive_product/{product_id}', [ProductController::class ,'unactive_product']);
    Route::get('/active_product/{product_id}', [ProductController::class , 'active_product']);
    Route::get('/edit_product/{product_id}', [ProductController::class ,'edit_product']);
    Route::post('/update_product/{product_id}', [ProductController::class , 'update_product']);
    Route::get('/delete_product/{product_id}', [ProductController::class ,'delete_product']);


//// Route cho danh mục sản phẩm
    Route::get('/danh-muc-san-pham/{slug_category_product}',[CategoryProduct::class, 'show_category_home']);
    Route::post('/save-cart',[CartController::class, 'save_cart']);
    Route::get('/show-cart',[CartController::class, 'show_cart']);
    Route::get('/add_category_product', [CategoryProduct::class, 'add_category_product']);
    Route::get('/all_category_product', [CategoryProduct::class, 'all_category_product']);
    Route::post('/save_category_product', [CategoryProduct::class, 'save_category_product']);
    Route::get('/unactive_category_product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
    Route::get('/active_category_product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);


