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
    Route::get('admin/buku/create', 'BukuController@create')->name('buku.create');
    //kategori
    Route::get('admin/kategori', 'KategoriController@index');
    Route::get('admin/kategori/create', 'KategoriController@create')->name('kategori.create');

});