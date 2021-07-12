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
use App\Http\Controllers\PeriodistaController;

Route::get('/', [HomeController::class,'index'])->name('articulos');
// Articulos
Route::get('articulo/nombre/{id}', [ArticuloController::class,'cargarArticulo'])->name('articulo');
Route::get('articulo/update/{id?}', [ArticuloController::class,'update'])->name('update.articulo');
Route::delete('articulo/delete_revista/{articulo?}/{revista?}',[ArticuloController::class,'delete'])->name('delete.revista_articulo');

//Revistas
Route::get('revista', [RevistaController::class,'index'])->name('revistas');
Route::get('revista/nombre/{id}', [RevistaController::class,'cargarRevista'])->name('revista');
Route::get('revista/update/{id?}', [RevistaController::class,'update'])->name('update.revista');

//Periodistas
Route::get('periodistas',[PeriodistaController::class,'index'])->name('periodistas');