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
Route::get('/user/product', [HomeController::class, 'index']);
Route::post('tim-kiem', [HomeController::class, 'search']);

// Route cho User
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/logIn', [UserController::class, 'logIn']);
    Route::get('/logOut', [UserController::class, 'logOut']);
    Route::post('/signUp', [UserController::class, 'signUp']);
    Route::get('/sendOTP', [UserController::class, 'sendOTP']);
    Route::post('/verificationCode', [UserController::class, 'sendVerificationCode']);
    Route::view('/verifyOTP', 'users.verifyOTP');
    Route::post('/confirmOTP', [UserController::class, 'confirmOTP']);
    Route::view('/resetPassword', 'users.resetPassword');
    Route::post('/confirmPassword', [UserController::class, 'resetPassword']);
    Route::get('/home', [UserController::class, 'show_home']);
    Route::get('/practice', [UserController::class, 'show_practice']);
    Route::get('/learn', [UserController::class, 'show_learn']);
    Route::get('/start' , [UserController::class, 'show_start']);
    Route::get('/type-of', [UserController::class, 'show_type_of']);
    Route::get('/concepts-of', [UserController::class, 'show_concepts_of']);
    Route::get('c1-quizz', [UserController::class, 'show_c1_quizz']);
    Route::get('contact', [UserController::class, 'show_contact']);
    Route::get('/train', [UserController::class, 'show_train']);
    Route::get('/help', [UserController::class, 'show_help']);
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
    Route::get('/chi-tiet-san-pham/{product_id}', [ProductController::class ,'details_product']);
    Route::get('/chi-tiet-san-pham/{product_slug}', [ProductController::class ,'details_product']);


//// Route cho danh mục sản phẩm
    Route::get('/danh-muc-san-pham/{slug_category_product}',[CategoryProduct::class, 'show_category_home']);
    Route::get('/add_category_product', [CategoryProduct::class, 'add_category_product']);
    Route::get('/all_category_product', [CategoryProduct::class, 'all_category_product']);
    Route::post('/save_category_product', [CategoryProduct::class, 'save_category_product']);
    Route::get('/unactive_category_product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
    Route::get('/active_category_product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);


// Route for CartController
    Route::post('/save-cart',[CartController::class, 'save_cart']);
    Route::get('/show-cart',[CartController::class, 'show_cart']);
    Route::get('/delete-to-cart/{rowId}',[CartController::class, 'delete_to_cart']);
    Route::post('/update-cart-quantity',[CartController::class, 'update_cart_quantity']);
    Route::get('login-checkout',[CartController::class, 'login_checkout']);
    Route::get('checkout',[CartController::class, 'checkout']);
    Route::post('save-checkout-customer',[CartController::class, 'save_checkout_customer']);
    Route::get('payment',[CartController::class, 'payment']);
    Route::post('order-place',[CartController::class, 'order_place']);
    Route::get('manage-order',[CartController::class, 'manage_order']);
    Route::get('view-order/{orderId}',[CartController::class, 'view_order']);


