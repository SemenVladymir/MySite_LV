<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\MainController::class, 'home']);

Route::get('/about', [\App\Http\Controllers\MainController::class, 'about']);

Route::get('/registration', [\App\Http\Controllers\MainController::class, 'registration']);

Route::get('/index', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/page', [\App\Http\Controllers\MainController::class, 'page']);

//Route::get('/', function () {
//    return view('home');
//});
