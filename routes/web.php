<?php

use App\Http\Controllers\MahasiswaController;
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

Route::redirect('/', '/login');
Route::get('/login', [MahasiswaController::class, 'login'])->name('login');
Route::post('/login-proses', [MahasiswaController::class, 'prosesLogin'])->name('login.proses');
Route::get('/logout', [MahasiswaController::class, 'logout'])->name('logout')->middleware('login');

Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftarMahasiswa'])->name('daftar.mahasiswa')->middleware('login');
Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'tabelMahasiswa'])->name('tabel.mahasiswa')->middleware('login');
Route::get('/blog-mahasiswa', [MahasiswaController::class, 'blogMahasiswa'])->name('blog.mahasiswa')->middleware('login');