<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;

//Login & Reg
Route::get('/', [menuController::class, 'index']);
Route::get('/BackLogin', [menuController::class, 'backLogin']);
Route::get('/Register', [menuController::class, 'register']);

//Admins


//Users
Route::post('Users/dashboard', [menuController::class, 'dashboardUser']);