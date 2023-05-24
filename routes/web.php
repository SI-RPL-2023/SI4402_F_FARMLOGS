<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelPetaniController;
use App\Http\Controllers\ResponseAdminController;


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

// Pembeli
Route::get('/pembeli/profile', [UserController::class, 'profilepembeli'])->name('profilepembeli');
Route::get('/pembeli/menu', [UserController::class, 'menupembeli'])->name('menupembeli');

Route::get('/pembeli/checkout', [UserController::class, 'checkoutpembeli'])->name('checkoutpembeli');
Route::get('/checkout/{id}', [UserController::class, 'checkoutpembeli'])->name('checkoutpembeli');
Route::post('/checkout', [UserController::class, 'inputpanen'])->name('inputpanen');

Route::get('/pembeli/transaksi', [UserController::class, 'transaksipembeli'])->name('transaksipembeli');



// Artikel
Route::get('/artikel', [ArtikelController::class,'index']);
Route::get('/artikel/{id_artikel}', 'ArtikelController@show')->name('artikel.show');

// Petani
Route::get('/petani/profile', [PetaniController::class, 'profilepetani'])->name('profilepetani');
Route::get('/petani/inputpanen', [PetaniController::class, 'inputpanen'])->name('inputpanen');
Route::post('/petani/inputpanen', [PetaniController::class, 'cekinput'])->name('cekinput');
Route::get('/artikelpetani', [ArtikelPetaniController::class,'index']);
Route::get('/artikelpetani/{id_artikelpetani}', 'ArtikelPetaniController@show')->name('artikelpetani.show');
Route::get('/petani/peminjaman', [PetaniController::class, 'peminjaman'])->name('peminjaman');

// Admin
Route::get('/admin/profile', [AdminController::class, 'profileadmin'])->name('profileadmin');
Route::get('/admin/profile', [AdminController::class, 'profileadmin'])->name('profileadmin');
Route::get('/admin/tambahproduk', [AdminController::class, 'tambahproduk'])->name('tambahproduk');




// Admin
Route::get('/admin/profile', [AdminController::class, 'profileadmin'])->name('profileadmin');
Route::get('/admin/totalhasilpanen', [AdminController::class, 'totalhasilpanen'])->name('totalhasilpanen');
Route::get('/admin/profile', [AdminController::class, 'profileadmin'])->name('profileadmin');
Route::get('/admin/profile', [AdminController::class, 'profileadmin'])->name('profileadmin');
Route::get('/admin/gudang', [AdminController::class, 'gudang'])->name('gudang');
Route::get('/admin/hasiltani', [AdminController::class, 'hasiltani'])->name('hasiltani');
Route::get('/admin/dana', [AdminController::class, 'dana'])->name('dana');
Route::get('/Admin/responseadmin', [ResponseAdminController::class, 'viewadmin'])->middleware('roles:1');




