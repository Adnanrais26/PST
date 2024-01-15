<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BHomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/users', [UserController::class, 'index']);
// // or
// Route::get('/users', 'App\Http\Controllers\UserController@index');

// front
Route::get('/', [IndexController::class, 'index']);
// Route::get('/index/home', [IndexController::class, 'home']);
Route::get('/login', [LoginController::class, 'index']);

// back
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/b_home', [BHomeController::class, 'index']);

