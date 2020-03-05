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

Route::resource('berita', 'BeritaController');
Route::resource('kategori', 'KategoriController');
Route::resource('tag', 'TagController');
Route::resource('artikel', 'ArtikelController');
Route::resource('akun', 'AkunController');
Route::resource('profiel', 'ProfielController');

