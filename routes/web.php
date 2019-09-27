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
Route::get('/barang-masuk', 'DaftarStok@index');
Route::get('/daftar', 'DaftarStok@index');
Route::get('/barang-masuk/tambah','DaftarStok@tambah');
Route::post('/barang-masuk/simpan','DaftarStok@simpan');
Route::get('/barang-masuk/edit/{id}','DaftarStok@edit');
Route::post('/barang-masuk/update','DaftarStok@update');
Route::get('/barang-masuk/delete/{id}','DaftarStok@delete');
Route::get('barang-keluar', function () {
    return 'Pemrosesan data barang keluar sedang dalam perbaikan harap tunggu beberapa hari lagi';
});
