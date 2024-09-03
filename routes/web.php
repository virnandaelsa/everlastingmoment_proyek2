<?php

use App\Http\Controllers\KatalogCustomerController;
use App\Http\Middleware\AuthLogin;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\KatalogCustomerController::class, 'index']);
Route::get('/lihatjasa/{id}', [App\Http\Controllers\KatalogCustomerController::class, 'lihatjasa']);
Route::get('/pesan/{id}', [App\Http\Controllers\KatalogCustomerController::class, 'pesan'])->middleware("auth");
Route::post('/pesan', [App\Http\Controllers\KatalogCustomerController::class, 'store_pesan'])->name('pesan.store')->middleware("auth");
Route::get('/tambah_katalog', [App\Http\Controllers\KatalogCustomerController::class, 'tambah_katalog'])->name('catalog.create');
Route::post('/tambah-katalog', [KatalogCustomerController::class, 'store_catalogs'])->name('catalog.store');
Route::get('/pemesanan', [App\Http\Controllers\KatalogCustomerController::class, 'pemesanan']);
Route::get('/dp', [App\Http\Controllers\KatalogCustomerController::class, 'dp']);
Route::get('/pelunasan', [App\Http\Controllers\KatalogCustomerController::class, 'pelunasan']);
Route::get('/status_pemesanan', [App\Http\Controllers\KatalogCustomerController::class, 'status_pesanan']);
Route::get('/reviewcustomer', [App\Http\Controllers\KatalogCustomerController::class, 'review_customer']);
Route::get('/lihatjasa_pj', [App\Http\Controllers\KatalogCustomerController::class, 'lihatjasa_pj']);

Route::get('/administrasi', [App\Http\Controllers\KatalogCustomerController::class, 'lengkapi_administrasi'])->middleware("auth");
Route::post('/administrasi', [App\Http\Controllers\KatalogCustomerController::class, 'store_administrasi'])->name('sfa');

Route::get('/dashboard', [App\Http\Controllers\KatalogCustomerController::class, 'dashboard'])->middleware("auth");
Route::get('/wishlist', [App\Http\Controllers\KatalogCustomerController::class, 'wishlist']);

Route::get('/profilcust', [App\Http\Controllers\KatalogCustomerController::class, 'profilcust']);
Route::get('/review', [App\Http\Controllers\KatalogCustomerController::class, 'review']);
Route::get('/helpcenter', [App\Http\Controllers\KatalogCustomerController::class, 'helpcenter']);
Route::get('/notifikasi', [App\Http\Controllers\KatalogCustomerController::class, 'notifikasi']);

Route::get('/datapesanan', [App\Http\Controllers\KatalogCustomerController::class, 'datapesanan']);
Route::get('/pemesanan/{id}', [App\Http\Controllers\KatalogCustomerController::class, 'pemesanan']);

Route::get('/account', [KatalogCustomerController::class, 'info_akun'])->name('account');

Route::get('/pesan/{id}', [App\Http\Controllers\KatalogCustomerController::class, 'pesan'])->middleware("auth");
Route::post('/pesan/{id}', [App\Http\Controllers\KatalogCustomerController::class, 'store_trx'])->middleware("auth")->name('trx');



// login - regirster
Route::get('/login', [App\Http\Controllers\KatalogCustomerController::class, 'login'])->middleware("guest")->name('login');
Route::post('/login', [App\Http\Controllers\AuthLoginController::class,'auth']);
Route::get('/registrasi', [App\Http\Controllers\KatalogCustomerController::class, 'registrasi'])->middleware("guest");
Route::post('/registrasi', [App\Http\Controllers\AuthLoginController::class,'create']);
Route::post('/logout', [App\Http\Controllers\AuthLoginController::class,'logout']);

Route::get('/t1', [App\Http\Controllers\TestingController::class, 't1']);
Route::get('/t2', [App\Http\Controllers\TestingController::class, 't2']);
Route::get('/t3', [App\Http\Controllers\TestingController::class, 't3']);
Route::get('/t4', [App\Http\Controllers\TestingController::class, 't4']);
Route::get('/t5', [App\Http\Controllers\TestingController::class, 't5']);
Route::get('/t6', [App\Http\Controllers\TestingController::class, 't6']);
Route::get('/t7', [App\Http\Controllers\TestingController::class, 't7']);
