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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('penerbit', 'PenerbitController');
    Route::resource('buku', 'BukuController');
    Route::resource('detail', 'DetailController');
    Route::resource('petugas', 'PetugasController');
    Route::get('/petugas/cari', 'PetugasController@cari');
    Route::resource('peminjaman', 'PeminjamanController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('peminjam', 'PeminjamController');

    // Route::resource('user', 'UserController');
});
Route::resource('detail', 'DetailController');
Route::resource('buku', 'BukuController');
Route::resource('kartu', 'KartuController');
Route::resource('peminjam', 'PeminjamController');
