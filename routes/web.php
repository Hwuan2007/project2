<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DrinkDetailController;
use App\Http\Controllers\DrinkMenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;

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

Route::middleware('AdminMiddleware')->prefix('/admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    // category
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{category}/edit', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    // drink
    Route::get('/drink', [DrinkController::class, 'index'])->name('drink.index');
    Route::get('/drink/create', [DrinkController::class, 'create'])->name('drink.create');
    Route::post('/drink/create', [DrinkController::class, 'store'])->name('drink.store');
    Route::get('/drink/{drink}/edit', [DrinkController::class, 'edit'])->name('drink.edit');
    Route::put('/drink/{drink}/edit', [DrinkController::class, 'update'])->name('drink.update');
    Route::delete('/drink/{drink}', [DrinkController::class, 'destroy'])->name('drink.destroy');
    // user
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{user}/edit', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    // order
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/detail/{receipt}', [OrderController::class, 'detail'])->name('order.detail');
    Route::get('/order/accept/{receipt}', [OrderController::class, 'accept'])->name('order.accept');
    Route::get('/order/cancel/{receipt}', [OrderController::class, 'cancel'])->name('order.cancel');
    Route::get('/order/cancelAccept/{receipt}', [OrderController::class, 'cancelAccept'])->name('order.cancelAccept');


});
Route::prefix('client') ->group(function (){
    Route::get('/', [HomeController::class, 'index']) -> name('client.index');
    // Menu
    Route::get('/all', [DrinkMenuController::class, 'index']) -> name('all.index');
    Route::get('/Menuitem/{category}', [DrinkMenuController::class, 'item']) -> name('Menuitem.item');
    // Drink Detail
    Route::get('/drink_detail/{drink}', [DrinkDetailController::class, 'drinkDetail']) -> name('drink_detail.drinkDetail');
    Route::put('/drink_detail/{drink}', [DrinkDetailController::class, 'store']) -> name('cart.store');
    //cart
    Route::get('/drink_detail/cart/viewCart', [CartController::class, 'viewCart']) -> name('cart.viewCart');
    Route::get('/drink_detail/cart/deleteCart/{id}', [CartController::class, 'deleteCart']) -> name('cart.deleteCart');
    // Route::post('/drink_detail/cart/storeCart', [CartController::class, 'storeCart']) -> name('cart.storeCart');
    Route::put('/drink_detail/cart/updateCart',[CartController::class, 'updateCart']) -> name('cart.updatecart');
    Route::get('/drink_detail/cart/checkOut',[CheckOutController::class, 'index']) -> name('cart.index');
    Route::post('/drink_detail/cart/checkOutProcces',[CheckOutController::class, 'check']) -> name('cart.check');


    

    //search
    Route::get('/search',[SearchController::class, 'index']) -> name('search.index');
    Route::put('/search',[SearchController::class, 'searchByUserPhoneNumber']) -> name('search.searchByUserPhoneNumber');
    
});
// logins
Route::get('/login', [LoginController::class, 'login'])->name('login.login');
Route::post('/checkLogin', [LoginController::class, 'checkLogin'])->name('login.checkLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
