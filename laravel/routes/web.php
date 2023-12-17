<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
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
    return view('welcome.home');
});

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create'])->name('users');
Route::post('/users/create', [UserController::class, 'store'])->name('users');
Route::get('/users/{user}', [UserController::class, 'edit']);
Route::post('/users/{user}', [UserController::class, 'update']);
