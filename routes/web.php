<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

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

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Data Siswa
    Route::resource('siswa', SiswaController::class);

    // Data Guru
    Route::resource('guru', GuruController::class);

    // Inventaris / Inventory
    Route::resource('inventories', InventoryController::class);

    // Peminjaman
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::get('/peminjaman/detail/{id}', [PeminjamanController::class, 'detail'])->name('peminjaman.detail');

    // AJAX untuk cek peminjam / barang
    Route::get('/cek-peminjam', [PeminjamanController::class, 'cekPeminjam'])->name('cek.peminjam');
    Route::get('/cek-barang', [PeminjamanController::class, 'cekBarang'])->name('cek.barang');

    // Pengembalian
    Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');
    Route::post('/pengembalian/kembali/{id}', [PengembalianController::class, 'kembalikan'])->name('pengembalian.kembalikan');
});

require __DIR__.'/auth.php';
