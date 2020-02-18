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

Route::get('/', "PagesController@index");
Route::get('/soal1', "PagesController@soal1");
Route::get('/soal2', "PagesController@soal2");
Route::get('/soal3', "PagesController@soal3");

Route::post('/proses-soal1', [
    'uses' => 'PagesController@prosesSoal1',
    'as' => 'proses.soal1'
]);

Route::post('/proses-soal2', [
    'uses' => 'PagesController@prosesSoal2',
    'as' => 'proses.soal2'
]);

Route::post('/proses-soal3', [
    'uses' => 'PagesController@prosesSoal3',
    'as' => 'proses.soal3'
]);

// Route::get('stok-barang');
