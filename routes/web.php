<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserVoucherController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\LiveChatController;

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

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [IndexController::class, 'index'])->name('landing');
Route::get('/my-gifts', [UserVoucherController::class, 'index'])->middleware('auth')->name('my-gifts');
Route::post('/my-gifts/store', [UserVoucherController::class, 'store'])->middleware('auth')->name('my-gifts.store');
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');
Route::post('/live-chat', [LiveChatController::class, 'store'])->name('live-chat.store');
