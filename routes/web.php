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
    // type of drink
    Route::get('/menu', [MenuController::class, 'index']) -> name('typeofdrink.index');
    Route::get('/menu/create', [MenuController::class, 'create']) -> name('typeofdrink.create');
    Route::post('/menu/create', [MenuController::class, 'store']) -> name('typeofdrink.store');
    // category
    Route::get('/category', [CategoryController::class, 'index']) -> name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create']) -> name('category.create');
    Route::post('/category/create', [CategoryController::class, 'store']) -> name('category.store');
    // drink
    Route::get('/drink', [DrinkController::class, 'index']) -> name('drink.index');
    Route::get('/drink/create', [DrinkController::class, 'create']) -> name('drink.create');
    Route::post('/drink//create', [DrinkController::class, 'store']) -> name('drink.store');
    // user
    Route::get('/user', [UserDashboardController::class, 'index']) -> name('user.index');
    Route::get('/user/create', [UserDashboardController::class, 'create']) -> name('user.create');
    Route::post('/user/create', [UserDashboardController::class, 'store']) -> name('user.store');
    // order
    Route::get('/order', [OrderController::class, 'index']) -> name('order.index');
    Route::get('/order/create', [OrderController::class, 'create']) -> name('order.create');
    Route::post('/order/create', [OrderController::class, 'store']) -> name('order.store');

});
Route::prefix('client') ->group(function (){
    Route::get('/drink', [DrinkClientController::class, 'index']) -> name('drink.index');
    Route::get('/', [HomeController::class, 'index']) -> name('client.index');
    Route::get('/drink_detail', [DrinkDetailController::class, 'index']) -> name('drink_detail.index');
});
