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

Route::get('/', 'MscregisController@index')->name('home');

Route::post('/detail', 'MscregisController@show')->name('detail');

Route::get('/edit', 'MscregisController@edit')->name('edit');

Route::get('/success', 'MscregisController@success')->name('suc');

Route::post('/update', 'MscregisController@update')->name('update');


