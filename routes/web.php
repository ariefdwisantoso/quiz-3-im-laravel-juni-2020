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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/artkel/create', 'ArtikelController@create'); // menampilkan halaman form
Route::post('/artikel/create', 'ArtikelController@store'); // menyimpan data
Route::get('/artikel', 'ArtikelController@index'); // menampilkan semua
Route::get('/artikel/view/{id}', 'ArtikelController@show'); // menampilkan detail item dengan id 
Route::get('/artikel/edit/{id}', 'ArtikelController@edit'); // menampilkan form untuk edit item
Route::put('/artikel/edit/{id}', 'ArtikelController@update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/hapus/{id}', 'ArtikelController@destroy'); // menghapus data dengan id