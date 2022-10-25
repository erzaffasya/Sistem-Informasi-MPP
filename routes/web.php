<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\LayananController;
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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('admin.index')->name('dashboard');
    });
    Route::resource('Berita', BeritaController::class);
    Route::resource('Instansi', InstansiController::class);
    Route::resource('Layanan', LayananController::class);
    Route::get('tambah-layanan/{id}', [LayananController::class, 'create'])->name('tambah-layanan');
});
require __DIR__.'/auth.php';
