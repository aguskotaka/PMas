<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware'=>'guest'], function(){
    Route::get('/register',[AuthController::class, 'register']);
    Route::post('/register',[AuthController::class, 'registerPost'])->name('register');
    Route::get('/login',[AuthController::class, 'login']);
    Route::post('/login',[AuthController::class, 'loginPost'])->name('login');
});


Route::group(['middleware'=>'auth'], function(){
    Route::get('/user/index',[UserController::class, 'index']);
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
});
