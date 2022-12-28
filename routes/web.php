<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route untuk tabel masker
Route::get('/masker', [App\Http\Controllers\MaskerController::class, 'index'])->name('masker');

Route::post('/masker', [App\Http\Controllers\MaskerController::class, 'create'])->name('add.masker');

Route::get('/masker/{id}/edit', [App\Http\Controllers\MaskerController::class, 'edit']);

Route::post('/masker/{id}/update', [App\Http\Controllers\MaskerController::class, 'update'])->name('update.masker');

Route::get('/masker/delete/{id}', [App\Http\Controllers\MaskerController::class, 'delete']);

//Route untuk tabel barang masuk
Route::get('/masuk', [App\Http\Controllers\MasukController::class, 'index'])->name('masuk');

Route::post('/masuk', [App\Http\Controllers\MasukController::class, 'create'])->name('add.msk');

Route::get('/masuk/{id}/edit', [App\Http\Controllers\MasukController::class, 'edit']);

Route::post('/masuk/{id}/update', [App\Http\Controllers\MasukController::class, 'update'])->name('update.msk');

Route::get('/masuk/delete/{id}', [App\Http\Controllers\MasukController::class, 'delete']);

//Route untuk tabel barang keluar
Route::get('/keluar', [App\Http\Controllers\KeluarController::class, 'index'])->name('keluar');

Route::post('/keluar', [App\Http\Controllers\KeluarController::class, 'create'])->name('add.keluar');

Route::get('/keluar/{id}/edit', [App\Http\Controllers\KeluarController::class, 'edit']);

Route::post('/keluar/{id}/update', [App\Http\Controllers\KeluarController::class, 'update'])->name('update.keluar');

Route::get('/keluar/delete/{id}', [App\Http\Controllers\KeluarController::class, 'delete']);


