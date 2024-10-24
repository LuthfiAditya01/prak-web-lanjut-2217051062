<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
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

Route::get('/user/profile', [UserController::class, 'profile']);  
Route::get('/user/create', [UserController::class, 'create']);  
Route::post('/user/store', [UserController::class,'store']) -> name('user_store');
Route::get('/user/index', [UserController::class, 'index'])->name('user_index');

// Route::put('/user/{id}', [UserController::class, 'update'])->name(user.udpate)
// Route::get('/user/delete', [UserController::class, 'edit']) -> name(user.edit);
