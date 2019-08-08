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


Route::group(['middleware' => 'admin'], function () {
    // home
    Route::get('admin/routes', 'HomeController@admin');
    // buku
    Route::get('admin/buku/', 'BukuController@index');
    Route::get('admin/buku/{id}/edit', 'BukuController@edit');
    Route::patch('admin/buku/{id}', 'BukuController@update');
    Route::delete('admin/buku/{id}', 'BukuController@destroy');
    Route::post('admin/buku/store', 'BukuController@store');
    Route::get('admin/buku/create', 'BukuController@create')->name('buku.create');
    
    //kategori
    Route::get('admin/kategori', 'KategoriController@index');
    Route::get('admin/kategori/{id}/edit', 'KategoriController@edit');
    Route::patch('admin/kategori/{id}', 'KategoriController@update');
    Route::delete('admin/kategori/{id}', 'KategoriController@destroy');
    Route::post('admin/kategori/store', 'KategoriController@store');
    Route::get('admin/kategori/create', 'KategoriController@create')->name('kategori.create');

});