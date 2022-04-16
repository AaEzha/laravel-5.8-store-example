<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
	Route::get('/dashboard', 'DashboardController@index');

	Route::get('/input_produk', 'ProdukController@input_produk');
	Route::post('/simpan_input_produk', 'ProdukController@simpan_input_produk');
	Route::get('/list_produk', 'ProdukController@list_produk');
	Route::get('/delete_produk/{produk_id}', 'ProdukController@delete_produk');
	Route::get('/edit_produk/{produk_id}', 'ProdukController@edit_produk');
	Route::post('/simpan_edit_produk', 'ProdukController@simpan_edit_produk');

	Route::get('/pesan_produk', 'PesanController@pesan_produk');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
