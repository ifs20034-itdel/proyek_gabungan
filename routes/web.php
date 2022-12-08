<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome', [
        'title' => 'Beranda',
        'image' => 'del.png'
    ]);
});

Route::get('/profil', function(){
    return view('profil', [
        'title' => 'Profil',
        'image' => 'del.png',
        'image2' => 'img/strukturorganisasi.png'
    ]);
});

Route::get('/berita', function(){
    return view('news', [
        'title' => 'Berita',
        'image' => 'del.png',
    ]);
});

Route::get('/beasiswa', function(){
    return view('beasiswa', [
        'title' => 'Beasiswa',
        'image' => 'del.png',
    ]);
});

Route::get('/agenda', function(){
    return view('agenda', [
        'title' => 'Agenda',
        'image' => 'del.png',
    ]);
});

Route::get('/informasiumum', function(){
    return view('informasiumum', [
        'title' => 'Informasi Umum',
        'image' => 'del.png',
    ]);
});

Route::get('/prestasi', function(){
    return view('prestasi', [
        'title' => 'Prestasi',
        'image' => 'del.png',
    ]);
});

Route::get('/peminjaman', function(){
    return view('peminjaman', [
        'title' => 'Peminjaman Ruangan',
        'image' => 'del.png',
    ]);
});

Route::get('/pkm', function(){
    return view('pkm', [
        'title' => 'Program Kreativitas Mahasiswa',
        'image' => 'del.png',
    ]);
});

Route::get('/mpm', function(){
    return view('mpm', [
        'title' => 'Majelis Permusyawaratan Mahasiswa',
        'image' => 'del.png',
    ]);
});
Route::get('/bem', function(){
    return view('bem', [
        'title' => 'Badan Eksekutif Mahasiswa',
        'image' => 'del.png',
    ]);
});
Route::get('/ukm', function(){
    return view('ukm', [
        'title' => 'Unit Kegiatan Mahasiswa',
        'image' => 'del.png',
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
