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

use Illuminate\Support\Facades\Route;


Route::get('/', 'KelolaKKController@index');
Route::get('/listJorong', 'KelolaKKController@listJorong');
Route::post('/create', 'KelolaKKController@create');
Route::post('/update', 'KelolaKKController@update');
Route::get('/detail/{id}', 'KelolaKKController@detail');
Route::get('/edit/{id}', 'KelolaKKController@edit');
Route::get('/delete/{id}', 'KelolaKKController@delete');
Route::get('/addAnggota/{id}', 'KelolaKKController@addAnggota');

Route::get('/penduduk', 'PendudukController@index');
Route::get('/penduduk/listPendidikan', 'PendudukController@listPendidikan');
Route::get('/penduduk/listPekerjaan', 'PendudukController@listPekerjaan');
Route::get('/penduduk/listNegara', 'PendudukController@listNegara');
Route::post('/addAnggota/penduduk/create', 'PendudukController@create');
Route::post('/penduduk/update', 'PendudukController@update');
Route::get('/penduduk/detail/{id}', 'PendudukController@detail');
Route::get('/penduduk/edit/{id}', 'PendudukController@edit');
Route::get('/penduduk/delete/{id}', 'PendudukController@delete');

Route::get('/pendudukUP', 'LaporanController@pendudukUP');
Route::get('/pendudukNA', 'LaporanController@pendudukNA');
Route::get('/pendudukLV', 'LaporanController@pendudukLV');
Route::get('/listNagari', 'LaporanController@listNagari');
Route::get('/pendudukNA/pilihNA', 'LaporanController@pilihNagari');
Route::get('/pendudukLV/pilihLV', 'LaporanController@pilihNagariLV');

