<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/cekregis', [UserController::class, 'cekregis'])->name('cekregis');
Route::post('/ceklogin', [UserController::class, 'ceklogin'])->name('ceklogin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/teslogin', [UserController::class, 'teslogin'])->name('teslogin');