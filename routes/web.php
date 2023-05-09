<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ModuleController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('/index');
})->name('home');
Route::resource('module', ModuleController::class);
Route::resource('user', UserController::class);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login_check', [AuthController::class, 'login'])->name('login_check');
