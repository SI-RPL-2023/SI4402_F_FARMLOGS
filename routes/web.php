<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetaniController;


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
Route::get('/registerpetani', [UserController::class, 'registerpetani'])->name('registerpetani');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/cekregis', [UserController::class, 'cekregis'])->name('cekregis');
Route::post('/cekregis2', [UserController::class, 'cekregis2'])->name('cekregis2');
Route::post('/ceklogin', [UserController::class, 'ceklogin'])->name('ceklogin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/updateprof', [UserController::class, 'updateprof'])->name('updateprof');

Route::get('/pembeli/home', [UserController::class, 'homepembeli'])->name('homepembeli');
Route::get('/pembeli/profile', [UserController::class, 'profilepembeli'])->name('profilepembeli');

Route::get('/petani/home', [PetaniController::class, 'homepetani'])->name('homepetani');
Route::get('/petani/profile', [PetaniController::class, 'profilepetani'])->name('profilepetani');

Route::get('/admin/dashboard', [AdminController::class, 'dashboardadmin'])->name('dashboard');
Route::get('/admin/profile', [AdminController::class, 'profileadmin'])->name('profileadmin');