<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/masuk', [App\Http\Controllers\MasukController::class, 'index']);
Route::Get('/masuk/create', [App\Http\Controllers\MasukController::class, 'create']);
Route::post('/masuk', [App\Http\Controllers\MasukController::class, 'store']);
Route::get('/masuk/edit/{id}', [App\Http\Controllers\MasukController::class, 'edit']);
Route::patch('/masuk/{id}', [App\Http\Controllers\MasukController::class, 'update']);
Route::delete('/masuk/{id}', [App\Http\Controllers\MasukController::class, 'destroy']);

Route::get('/keluar', [App\Http\Controllers\KeluarController::class, 'index']);
Route::Get('/keluar/create', [App\Http\Controllers\KeluarController::class, 'create']);
Route::post('/keluar', [App\Http\Controllers\KeluarController::class, 'store']);
Route::get('/keluar/edit/{id}', [App\Http\Controllers\KeluarController::class, 'edit']);
Route::patch('/keluar/{id}', [App\Http\Controllers\KeluarController::class, 'update']);
Route::delete('/keluar/{id}', [App\Http\Controllers\KeluarController::class, 'destroy']);

Route::get('/kembali', [App\Http\Controllers\KembaliController::class, 'index']);
Route::Get('/kembali/create', [App\Http\Controllers\KembaliController::class, 'create']);
Route::post('/kembali', [App\Http\Controllers\KembaliController::class, 'store']);
Route::get('/kembali/edit/{id}', [App\Http\Controllers\KembaliController::class, 'edit']);
Route::patch('/kembali/{id}', [App\Http\Controllers\KembaliController::class, 'update']);
Route::delete('/kembali/{id}', [App\Http\Controllers\KembaliController::class, 'destroy']);

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);
