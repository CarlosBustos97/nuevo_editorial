<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\RevistaController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('articulo/{id}', [ArticuloController::class,'index'])->name('articulo');
Route::get('revista/{id}', [RevistaController::class,'index'])->name('revista');