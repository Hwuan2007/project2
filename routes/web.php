<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\DrinkClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DrinkDetailController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::prefix('admin') ->group(function (){
    Route::get('/', [DashboardController::class, 'index']) -> name('dashboard.index');
    Route::get('/menu', [MenuController::class, 'index']) -> name('typeofdrink.index');
    Route::get('/category', [CategoryController::class, 'index']) -> name('category.index');
    Route::get('/drink', [DrinkController::class, 'index']) -> name('drink.index');
    Route::get('/user', [UserDashboardController::class, 'index']) -> name('user.index');
    Route::get('/order', [OrderController::class, 'index']) -> name('order.index');
});
Route::prefix('client') ->group(function (){
    Route::get('/drink', [DrinkClientController::class, 'index']) -> name('drink.index');
    Route::get('/', [HomeController::class, 'index']) -> name('client.index');
    Route::get('/drink_detail', [DrinkDetailController::class, 'index']) -> name('drink_detail.index');
});
