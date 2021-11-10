<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ElectronicController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name("admin.index");
    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category_product', CategoryProductController::class);
    Route::get('/form',[ProductController::class,'form'])->name("admin.form");
});

Route::group(['namespace' => 'electronic'], function (){
    Route::get('/',[ElectronicController::class,'index'])->name('electronic.index');
    Route::get('/all_product',[ElectronicController::class,'allProduct'])->name('electronic.all_product');
    Route::get('/category',[ElectronicController::class,'category'])->name('electronic.category');
    Route::get('/product',[ElectronicController::class,'productDetail'])->name('electronic.product');
    Route::get('/cart',[ElectronicController::class,'cart'])->name('electronic.cart');
    Route::get('/checkout',[ElectronicController::class,'checkout'])->name('electronic.checkout');
    Route::get('/wishlist',[ElectronicController::class,'wistlist'])->name('electronic.wistlist');
    Route::get('/about',[ElectronicController::class,'about'])->name('electronic.about');
    Route::get('/contact',[ElectronicController::class,'contact'])->name('electronic.contact');
    Route::get('/my_account',[ElectronicController::class,'myAccount'])->name('electronic.my_account');
});

Route::group(['namespace' => 'electronic'], function (){
    Route::get('/',[ElectronicController::class,'index'])->name('electronic.index');
    Route::get('/all_product',[ElectronicController::class,'allProduct'])->name('electronic.all_product');
    Route::get('/category',[ElectronicController::class,'category'])->name('electronic.category');
    Route::get('/product',[ElectronicController::class,'productDetail'])->name('electronic.product');
    Route::get('/cart',[ElectronicController::class,'cart'])->name('electronic.cart');
    Route::get('/checkout',[ElectronicController::class,'checkout'])->name('electronic.checkout');
    Route::get('/wishlist',[ElectronicController::class,'wishlist'])->name('electronic.wishlist');
    Route::get('/about',[ElectronicController::class,'about'])->name('electronic.about');
    Route::get('/contact',[ElectronicController::class,'contact'])->name('electronic.contact');
    Route::get('/blog',[ElectronicController::class,'blog'])->name('electronic.blog');
    Route::get('/blog_detail',[ElectronicController::class,'blogDetail'])->name('electronic.blog_detail');
});

Route::group(['namespace' => 'auth'], function (){
    Route::get('/my_account',[AuthController::class,'myAccount'])->name('auth.my_account');
    Route::get('/login_user',[AuthController::class,'loginRegister'])->name('auth.login_user');
    Route::post('/login_user',[AuthController::class,'postLoginUser'])->name('auth.login_user');
    Route::get('/register_user',[AuthController::class,'loginRegister'])->name('auth.register_user');
    Route::post('/register_user',[AuthController::class,'postRegister'])->name('auth.register_user');
    Route::get('/sign_in_admin',[AuthController::class,'signInAdmin'])->name('auth.sign_in_admin');
    Route::get('/sign_up_admin',[AuthController::class,'signUpAdmin'])->name('auth.sign_up_admin');
    Route::get('/forgot_password',[AuthController::class,'forgotPassword'])->name('auth.forgot_password');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});