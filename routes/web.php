<?php

use App\Http\Controllers\ExitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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




Route::get('/', [HomeController::class,'index'])->name('homeIndex');


Route::get('/reg', [RegisterController::class, 'show'])->name('registerShow');
Route::post('/reg', [RegisterController::class,'register'])->name('registerUser');


// Route::get('',[ExitController::class,'exitUser'])->name('exitUser');


Route::get('/log',[LoginController::class,'show'])->name('loginShow');
Route::post('/log',[LoginController::class,'login'])->name('loginUser');


Route::get('/exit',[ExitController::class,'exitUser'])->name('logoutUser');
