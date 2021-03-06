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

Route::get('/', 'AwalController@index');



Route::get('/rumah', 'RumahController@index')->name('rumah');
Route::get('/list','BarangController@index')->name('list');
Route::get('/cari','BarangController@cari')->name('cari');
Route::get('/buku/detail/{id}/detail', 'BarangController@detail');
Route::post('/cart', 'KeranjangController@store')->name('cart');
Route::get('/keranjang', 'KeranjangController@index')->name('keranjang');
Route::post('buktibayar/store', 'BuktiBayarController@store')->name('buktibayar.store');
Route::post('buktibayar', 'BuktiBayarController@index')->name('buktibayar');


// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::group(['middleware' => 'admin'], function () {
    // home
    Route::get('admin/routes', 'RumahController@admin');
    // buku
    Route::get('admin/buku', 'BukuController@index')->name('admin.buku');
    Route::get('admin/buku/{id}/edit', 'BukuController@edit');
    Route::patch('admin/buku/{id}', 'BukuController@update');
    Route::delete('admin/buku/{id}', 'BukuController@destroy');
    Route::post('admin/buku/store', 'BukuController@store')->name('admin.buku.store');
    Route::get('admin/buku/create', 'BukuController@create')->name('admin.buku.create');
    
    //kategori
    Route::get('admin/kategori', 'KategoriController@index')->name('admin.kategori');
    Route::get('admin/kategori/{id}/edit', 'KategoriController@edit');
    Route::patch('admin/kategori/{id}', 'KategoriController@update');
    Route::delete('admin/kategori/{id}', 'KategoriController@destroy');
    Route::post('admin/kategori/store', 'KategoriController@store');
    Route::get('admin/kategori/create', 'KategoriController@create')->name('admin.kategori.create');

    Route::get('admin/buktibayar', 'BUktiBayarController@index')->name('admin.buktibayar');
    Route::get('admin/buktibayar/{id}/edit', 'BUktiBayarController@edit');
    Route::patch('admin/buktibayar/{id}', 'BUktiBayarController@update');
});