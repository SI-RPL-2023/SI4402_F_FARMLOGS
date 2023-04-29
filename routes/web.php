<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ArtikelController;


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
Route::get('/login', function () {
    return view('login');
})->name ('login');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/registerpetani', [UserController::class, 'registerpetani'])->name('registerpetani');
Route::post('/cekregis', [UserController::class, 'cekregis'])->name('cekregis');
Route::post('/cekregis2', [UserController::class, 'cekregis2'])->name('cekregis2');
Route::post('/ceklogin', [UserController::class, 'ceklogin'])->name('ceklogin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/updateprof', [UserController::class, 'updateprof'])->name('updateprof');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboardadmin'])->middleware('roles:1');
    Route::get('/pembeli/home', [UserController::class, 'homepembeli'])->middleware('roles:2');
    Route::get('/petani/home', [PetaniController::class, 'homepetani'])->middleware('roles:3');
});


Route::get('/pembeli/profile', [UserController::class, 'profilepembeli'])->name('profilepembeli');
Route::get('/artikel', [ArtikelController::class,'index']);
Route::get('/artikel/{id_artikel}', 'ArtikelController@show')->name('artikel.show');

Route::get('/petani/profile', [PetaniController::class, 'profilepetani'])->name('profilepetani');

Route::get('/admin/profile', [AdminController::class, 'profileadmin'])->name('profileadmin');



