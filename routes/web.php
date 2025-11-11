<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;

//Login & Reg
Route::get('/', [menuController::class, 'index']);
Route::get('/BackLogin', [menuController::class, 'backLogin']);
Route::get('/Register', [menuController::class, 'register']);

//Admins
Route::post('Admin/dashboard', [menuController::class, 'adminDashboard']);
Route::get('/Admin/dashboard', [menuController::class, 'adminDashboard']);
Route::get('Admin/kelolaPenginapan', [menuController::class, 'kelolaPenginapan']);
Route::get('Admin/kelolaPembayaran', [menuController::class, 'kelolaPembayaran']);
Route::get('Admin/kelolaPengguna', [menuController::class, 'kelolaPengguna']);
Route::get('Admin/laporan', [menuController::class, 'laporan']);

//Users
Route::post('Users/dashboard', [menuController::class, 'dashboardUser']);
Route::get('/Users/dashboard', [menuController::class, 'dashboardUser']);
Route::get('Users/detail', [menuController::class, 'detail']);
Route::get('/Users/pemesanan', [menuController::class, 'pesanan']);
Route::post('Users/pemesanan', [menuController::class, 'kirimPesanan']);
Route::get('Users/detailPesanan', [menuController::class, 'detailPesanan']);
Route::get('Users/Pembayaran', [menuController::class, 'pembayaran']);
Route::post('/Users/Pembayaran', [menuController::class, 'kirimPembayaran']);
Route::post('/Users/ulasan', [menuController::class, 'ulasan']);
Route::post('/Users/status', [menuController::class, 'status']);
Route::get('/Users/status', [menuController::class, 'status']);
Route::get('/Users/cancel', [menuController::class, 'cancel']);