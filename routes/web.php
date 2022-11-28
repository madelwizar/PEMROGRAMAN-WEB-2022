<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/', function () {
    return view('auth/login');
})->middleware('guest');

Route::get('sapi', [App\Http\Controllers\SapiController::class, 'index'])->name('sapi')->middleware('auth');
Route::post('tambah',[App\Http\Controllers\SapiController::class, 'store'])->name('tambah')->middleware('auth');
Route::get('sapi/hapus/{id}',[App\Http\Controllers\SapiController::class, 'destroy'])->name('sapi.hapus')->middleware('auth');


Route::get('penimbangan/pertama', [App\Http\Controllers\timbangsatuController::class, 'index'])->name('penimbangan/pertama')->middleware('auth');
Route::get('penimbangan/pertama/{id}', [App\Http\Controllers\timbangsatuController::class, 'edit'])->name('penimbangan.pertama')->middleware('auth');
Route::put('penimbangan/{id}', [App\Http\Controllers\timbangsatuController::class, 'update'])->name('penimbangan.update')->middleware('auth');

Route::get('peramalan', [App\Http\Controllers\peramalanController::class, 'index'])->name('peramalan')->middleware('auth');

Route::get('pelaporan', [App\Http\Controllers\pelaporanController::class, 'index'])->name('pelaporan')->middleware('auth');
Route::get('sapi2', [App\Http\Controllers\pelaporanController::class, 'sapi2'])->name('sapi2')->middleware('auth');
Route::get('sapi3', [App\Http\Controllers\pelaporanController::class, 'sapi3'])->name('sapi3')->middleware('auth');
Route::get('sapi4', [App\Http\Controllers\pelaporanController::class, 'sapi4'])->name('sapi4')->middleware('auth');


Route::get('user', [App\Http\Controllers\userController::class, 'index'])->name('user')->middleware('auth');
Route::get('user/edit/{id}', [App\Http\Controllers\userController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::put('user/update/{id}', [App\Http\Controllers\userController::class, 'update'])->name('user.update')->middleware('auth');
Route::get('user/hapus/{id}',[App\Http\Controllers\userController::class, 'destroy'])->name('user.hapus')->middleware('auth');