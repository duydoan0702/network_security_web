<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\ProductController;

// Route tĩnh trả về các view
//Route::get('/product', function () {
//    return view('layout');
//});

//Route::get('/product', function () {
//    return view('pages.product');
//});

Route::get('/news', function () {
    return view('pages.news');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

// Route sử dụng controller
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/product', [HomeController::class, 'index']);
Route::get('/add_product',[ProductController::class, 'add_product']);
Route::post('/save_product', [ProductController::class, 'save_product']);
Route::get('/all_product', [ProductController::class, 'all_product']);
Route::get('/unactive_product/{product_id}', [ProductController::class ,'unactive_product']);
Route::get('/active_product/{product_id}', [ProductController::class , 'active_product']);
Route::get('/edit_product/{product_id}', [ProductController::class ,'edit_product']);
Route::post('/update_product/{product_id}', [ProductController::class , 'update_product']);
Route::get('/delete_product/{product_id}', [ProductController::class ,'delete_product']);

// Route quản lý danh mục sản phẩm
Route::get('/add_category_product', [CategoryProduct::class, 'add_category_product']);
Route::get('/all_category_product', [CategoryProduct::class, 'all_category_product']);
Route::post('/save_category_product', [CategoryProduct::class, 'save_category_product']);
Route::get('/unactive_category_product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
Route::get('/active_category_product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);

// Route trang chủ
Route::get('/', [HomeController::class, 'index']);
