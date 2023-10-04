<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
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
Route::prefix('/dashboard') ->group(function (){
    Route::get('/', [Dashboard::class, 'index']) -> name('dashboard.index');
//    Route::get('/', [Dashboard::class, 'main']) -> name('dashboard.main');
});
