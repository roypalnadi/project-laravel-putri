<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('dashboard');
})->name("dashboard");

Route::get('/pemesanan', function () {
    return view('pemesanan');
})->name("pemesanan");

Route::get('/data-kamar', function () {
    return view('data-kamar');
})->name("dataKamar");

Route::get('/data-penghuni', function () {
    return view('data-penghuni');
})->name("dataPenghuni");

Route::get('/detail-datapenghuni', function () {
    return view('detail-datapenghuni');
})->name("detaildatapenghuni");

Route::get('/riwayat', function () {
    return view('riwayat');
})->name("riwayat");

Route::get('/kelola-akun', function () {
    return view('kelola-akun');
})->name("kelolaAkun");
