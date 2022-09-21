<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('firstpage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addevent', [App\Http\Controllers\IndexController::class, 'add'])->name('addevent');
Route::post('/addeventstore', [App\Http\Controllers\IndexController::class, 'store'])->name('addeventstore');
Route::get('/getevent', [App\Http\Controllers\IndexController::class, 'getevent'])->name('getevent');
