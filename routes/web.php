<?php

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

Route::get('barang-masuk', 'DaftarStok@index');

Route::get('barang-keluar', function () {
    return 'Daftar barang keluar dan pencatatan barang keluar';
});
Route::get('daftar-stok-barang', function () {
    return view('daftarstok');
});
Route::get('barang-masuk/daftar-barang-masuk', 'BarangMasuk@index');

Route::get('/barang-masuk/{nama}', 'DaftarStokBarang@index');

Route::get('/daftar', 'DaftarStok@daftar');
Route::post('/catat/barang-masuk', 'DaftarStok@proses');