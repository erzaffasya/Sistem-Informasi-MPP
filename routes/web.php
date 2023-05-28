<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\KategoriGaleriController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LinkTerkaitController;
use App\Http\Controllers\MekanismeController;
use App\Http\Controllers\NamaLayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\TestimoniController;
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


Route::get('/', [LandingpageController::class, 'index'])->name('home');
Route::get('/berita', [LandingpageController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [LandingpageController::class, 'beritaDetail'])->name('berita-detail');
Route::get('/tentang', [LandingpageController::class, 'tentang'])->name('tentang');
Route::get('/layanan', [LandingpageController::class, 'layanan'])->name('layanan');
Route::get('/layanan/{slug}', [LandingpageController::class, 'layananDetail'])->name('layanan-detail');
Route::get('/kontak', [LandingpageController::class, 'kontak'])->name('kontak');
Route::post('/get-kuota', [Controller::class, 'getInstansiKuota'])->name('get-kuota');
Route::post('/ambil-antrian', [Controller::class, 'ambilAntrian'])->name('ambil-antrian');
Route::post('/login-mpp', [Controller::class, 'loginMpp'])->name('login-mpp');
Route::get('/logout-mpp', function () {
    session()->forget('loginMpp');
    return back();
})->name('logout-mpp');


// page baru
Route::get('/registrasi', [LandingpageController::class, 'regis'])->name('regis');
Route::post('/regis', [LandingpageController::class, 'tambahRegis'])->name('post-regis');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('Instansi', InstansiController::class);
    Route::resource('Layanan', LayananController::class);
    Route::get('tambah-layanan/{id}', [LayananController::class, 'create'])->name('tambah-layanan');
    Route::resource('Berita', BeritaController::class);


    Route::resource('FAQ', FaqController::class);
    Route::resource('Fasilitas', FasilitasController::class);
    Route::resource('Galeri', GaleriController::class);
    Route::resource('NamaLayanan', NamaLayananController::class);
    Route::resource('KategoriBerita', KategoriBeritaController::class);
    Route::resource('KategoriGaleri', KategoriGaleriController::class);
    Route::resource('LinkTerkait', LinkTerkaitController::class);
    Route::resource('Mekanisme', MekanismeController::class);
    Route::resource('Profile', ProfileController::class);
    Route::resource('Testimoni', TestimoniController::class);
    Route::resource('Tentang', TentangController::class);


    Route::get('profile/tentang', [TentangController::class, 'index'])->name('ubah-tentang');
    Route::get('profile/kepala-dinas', [ProfileController::class, 'kepalaDinas'])->name('kepalaDinas');
    Route::get('profile/profil-website', [ProfileController::class, 'profilWebsite'])->name('profilWebsite');
    Route::get('profile/kontak', [ProfileController::class, 'kontak'])->name('kontaks');
    Route::get('profile/sosial-media', [ProfileController::class, 'sosialMedia'])->name('sosialMedia');
    Route::get('profile/jadwal-pelayanan', [ProfileController::class, 'jadwalPelayanan'])->name('jadwalPelayanan');
});
require __DIR__ . '/auth.php';
