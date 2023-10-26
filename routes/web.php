<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DrinkDetailController;
use App\Http\Controllers\DrinkMenuController;
use App\Http\Controllers\UserController;

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

Route::prefix('admin') ->group(function (){
    Route::get('/', [DashboardController::class, 'index']) -> name('dashboard.index');
    // category
    Route::get('/category', [CategoryController::class, 'index']) -> name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create']) -> name('category.create');
    Route::post('/category/create', [CategoryController::class, 'store']) -> name('category.store');
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit']) -> name('category.edit');
    Route::put('/category/{category}/edit', [CategoryController::class, 'update']) -> name('category.update');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy']) -> name('category.destroy');
    // drink
    Route::get('/drink', [DrinkController::class, 'index']) -> name('drink.index');
    Route::get('/drink/create', [DrinkController::class, 'create']) -> name('drink.create');
    Route::post('/drink/create', [DrinkController::class, 'store']) -> name('drink.store');
    Route::get('/drink/{drink}/edit', [DrinkController::class, 'edit']) -> name('drink.edit');
    Route::put('/drink/{drink}/edit', [DrinkController::class, 'update']) -> name('drink.update');
    Route::delete('/drink/{drink}', [DrinkController::class, 'destroy']) -> name('drink.destroy');
    // user
    Route::get('/user', [UserController::class, 'index']) -> name('user.index');
    Route::get('/user/create', [UserController::class, 'create']) -> name('user.create');
    Route::post('/user/create', [UserController::class, 'store']) -> name('user.store');
    Route::get('/user/{user}/edit', [UserController::class, 'edit']) -> name('user.edit');
    Route::put('/user/{user}/edit', [UserController::class, 'update']) -> name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy']) -> name('user.destroy');
    // order
    Route::get('/order', [OrderController::class, 'index']) -> name('order.index');
    Route::get('/order/create', [OrderController::class, 'create']) -> name('order.create');
    Route::post('/order/create', [OrderController::class, 'store']) -> name('order.store');
    Route::get('/order/{order}/edit', [OrderController::class, 'edit']) -> name('order.edit');
    Route::put('/order/{order}/edit', [OrderController::class, 'update']) -> name('order.update');
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
    Route::put('/drink_detail/cart/storeCart', [CartController::class, 'storeCart']) -> name('cart.storeCart');
});
// login
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login.login');
Route::post('/checkLogin', [\App\Http\Controllers\LoginController::class, 'checkLogin'])->name('login.checkLogin');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('login.logout');
