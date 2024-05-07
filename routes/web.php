<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\StrukturalController;
use App\Http\Controllers\Admin\PublikasiController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ArsipController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\PencarianPublikasiController;

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

Route::get('/sejarahhmi', function () {
    return view('sejarahhmi');
});

Route::get('/struktural', function () {
    return view('struktural');
});

Route::get('/arsip', function () {
    return view('arsip');
});

Route::controller(DashboardController::class)->name('landing.')->prefix('landing')->group(function () {
    $route = array('getStruktural','getPublikasi','getDetailpublikasi','getBerita','getAnggota', 'getArsip');
    foreach ($route as $route) {
        Route::any($route=='index'?'':'/'.$route, $route)->name($route);
    }
});

Route::get('/publikasi',[ViewController::class, 'publikasi']);
Route::get('/detailpublikasi',[ViewController::class, 'detailpublikasi'])->name('view.detailpublikasi');
Route::get('/publikasi/{id}',[DashboardController::class, 'getDetailpublikasi'])->name('dashboard.detailpublikasi');
Route::get('/berita',[ViewController::class, 'berita']);
Route::get('/berita/{id}',[DashboardController::class, 'getDetailberita'])->name('dashboard.detailberita');
Route::get('/databasekader',[ViewController::class, 'databasekader']);
Route::get('/datakader/{id}',[DashboardController::class, 'getDetaildatabasekader'])->name('dashboard.detaildatabasekader');
Route::get('/kontak',[ViewController::class, 'kontak']);

Route::prefix('admin')->group(function(){
    Route::get('/', [Admin\Auth\LoginController::class, 'loginForm']);
    Route::get('/login', [Admin\Auth\LoginController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [Admin\Auth\LoginController::class, 'login'])->name('admin.login');
    Route::get('/home',[Admin\HomeController::class,'index'])->name('admin.home');
    Route::get('/struktural',[Admin\StrukturalController::class,'struktural']);
    Route::get('/publikasi',[Admin\PublikasiController::class,'publikasi']);
    Route::get('/berita',[Admin\BeritaController::class,'berita']);
    Route::get('/anggota',[Admin\AnggotaController::class,'anggota']);
    Route::get('/arsip',[Admin\ArsipController::class,'arsip']);
    Route::get('/logout', [Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');
});

Route::get('/admin/anggota', [AnggotaController::class, 'index']);
Route::post('/anggota/create', [AnggotaController::class, 'create']);
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit']);
Route::put('/anggota/{id}/update', [AnggotaController::class, 'update']);
Route::get('/anggota/{id}/hapus', [AnggotaController::class, 'hapus']);

Route::post('/struktural/create', [StrukturalController::class, 'create']);
Route::get('/struktural/{id}/ubah', [StrukturalController::class, 'ubah']);
Route::put('/struktural/{id}/update', [StrukturalController::class, 'update']);
Route::get('/struktural/{id}/hapus', [StrukturalController::class, 'hapus']);

Route::post('/publikasi/create', [PublikasiController::class, 'create']);
Route::get('/publikasi/tambah', [PublikasiController::class, 'tambah']);
Route::get('/publikasi/{id}/ubah', [PublikasiController::class, 'ubah']);
Route::put('/publikasi/{id}/update', [PublikasiController::class, 'update']);
Route::get('/publikasi/{id}/hapus', [PublikasiController::class, 'hapus']);

Route::post('/berita/create', [BeritaController::class, 'create']);
Route::get('/berita/tambah', [BeritaController::class, 'tambah']);
Route::get('/berita/{id}/ubah', [BeritaController::class, 'ubah']);
Route::put('/berita/{id}/update', [BeritaController::class, 'update']);
Route::get('/berita/{id}/hapus', [BeritaController::class, 'hapus']);

Route::post('/arsip/create', [ArsipController::class, 'create']);
Route::get('/arsip/{id}/hapus', [ArsipController::class, 'hapus']);
