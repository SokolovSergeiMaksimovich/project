<?php

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
});
Route::resource('module', ModuleController::class);
Route::resource('user', UserController::class);

