<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardUserController;
use App\Http\Controllers\Dashboard\DashboardBannerController;
use App\Http\Controllers\Dashboard\DashboardMemberController;
use App\Http\Controllers\Dashboard\DashboardProductController;
use App\Http\Controllers\Dashboard\DashboardProfileController;
use App\Http\Controllers\Dashboard\DashboardCategoryController;
use App\Http\Controllers\Dashboard\DashboardPasswordController;
use App\Http\Controllers\Dashboard\DashboardFlashsaleController;



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

Route::get('/', HomeController::class);
Route::post('sendProduct', [ProductController::class, 'sendProduct']);
Route::post('tanyaProduct', [ProductController::class, 'tanyaProduct']);
Route::get('product/{product:slug}', [ProductController::class, 'detailProduct']);
Route::get('product', [ProductController::class, 'index']);
Route::get('product-list', [ProductController::class, 'productList']);
Route::get('flash-sale', [ProductController::class, 'flashSale']);
Route::get('category/{category:slug}', [ProductController::class, 'category']);
Route::get('settings', SettingsController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/auth/redirect/login', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/redirect/register', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('register',[RegisterController::class,'register'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/profile', [DashboardProfileController::class, 'index'])->middleware('auth');
Route::get('/dashboard/password', [DashboardPasswordController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/anggota', DashboardMemberController::class)->middleware('auth');
Route::get('/dashboard/anggota/get/{id}',[DashboardMemberController::class,'getMembers'])->middleware('auth');
Route::get('/dashboard/products/checkSlug', [DashboardProductController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/products/get/{id}', [DashboardProductController::class, 'getProduct'])->middleware('auth');
Route::resource('/dashboard/products', DashboardProductController::class)->middleware('auth');
Route::get('/dashboard/categories/get/{id}', [DashboardCategoryController::class, 'getCategories'])->middleware('auth');
Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/categories', DashboardCategoryController::class)->middleware('auth');
Route::resource('/dashboard/flashsale', DashboardFlashsaleController::class)->middleware('auth');
Route::put('/dashboard/flashsale/openflashsale/{id}',[DashboardFlashsaleController::class,'openFlashSale'])->middleware('auth');
Route::put('/dashboard/flashsale/closeflashsale/{id}',[DashboardFlashsaleController::class,'closeFlashSale'])->middleware('auth');
Route::get('/dashboard/flashsale/getflashsale/{id}',[DashboardFlashsaleController::class,'getFlashSale'])->middleware('auth');
Route::get('/dashboard/flashsale/get/{id}',[DashboardFlashSaleController::class,'getProduct'])->middleware('auth');
Route::post('/dashboard/flashsale/remove/{remove_flashsale}', [DashboardFlashsaleController::class, 'removeFlashsale']);
Route::post('/dashboard/flashsale/add/{add_flashsale}', [DashboardFlashsaleController::class, 'addFlashsale']);
Route::get('/dashboard/banner',[DashboardBannerController::class, 'index'])->name('banner.index')->middleware('auth');
Route::post('/dashboard/banner',[DashboardBannerController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/banner/{banner}',[DashboardBannerController::class, 'destroy'])->middleware('auth');
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('auth');
Route::get('/dashboard/user/get/{id}',[DashboardUserController::class,'getUser'])->middleware('auth');
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class,'store'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}',[ResetPasswordController::class,'index'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class,'store'])->middleware('guest')->name('password.update');
