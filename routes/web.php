<?php

use App\Http\Controllers\Admin\AdminController;
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

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name("admin.index");
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
    Route::get('/login_register',[AuthController::class,'loginRegister'])->name('auth.login_register');
});