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

use App\Http\Controllers\kontakController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('kontak', 'kontakController@index')->name('kontak_index');
Route::get('kontak/search', 'kontakController@search')->name("search_kontak");

Route::get('kontak/create', 'kontakController@new')->name("new_kontak");
Route::post('kontak/create', 'kontakController@create')->name("add_kontak");

Route::get('kontak/{id}/edit', 'kontakController@edit')->name("edit_kontak");
Route::post('kontak/{id}/edit', 'kontakController@update')->name("update_kontak");
Route::get('kontak/{id}/delete', 'kontakController@delete')->name("delete_kontak");

