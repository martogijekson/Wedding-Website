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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/penganten', 'PengantenController@index')->name('penganten');
Route::get('/penganten/create', 'PengantenController@create')->name('penganten.create');
Route::post('/penganten', 'PengantenController@store')->name('penganten.store');
Route::get('/penganten/{id}/edit', 'PengantenController@edit')->name('penganten.edit');
Route::put('/penganten/{id}', 'PengantenController@update')->name('penganten.update');
Route::delete('/penganten/{id}', 'PengantenController@destroy')->name('penganten.destroy');

Route::get('/story', 'StoryController@index')->name('story');
Route::get('/story/create', 'StoryController@create')->name('story.create');
Route::post('/story', 'StoryController@store')->name('story.store');
Route::get('/story/{id}/edit', 'StoryController@edit')->name('story.edit');
Route::put('/story/{id}', 'StoryController@update')->name('story.update');
Route::delete('/story/{id}', 'StoryController@destroy')->name('story.destroy');

Route::get('/akad', 'AkadController@index')->name('akad');
Route::get('/akad/create', 'AkadController@create')->name('akad.create');
Route::post('/akad', 'AkadController@store')->name('akad.store');
Route::get('/akad/{id}/edit', 'AkadController@edit')->name('akad.edit');
Route::put('/akad/{id}', 'AkadController@update')->name('akad.update');
Route::delete('/akad/{id}', 'AkadController@destroy')->name('akad.destroy');

Route::get('/resepsi', 'ResepsiController@index')->name('resepsi');
Route::get('/resepsi/create', 'ResepsiController@create')->name('resepsi.create');
Route::post('/resepsi', 'ResepsiController@store')->name('resepsi.store');
Route::get('/resepsi/{id}/edit', 'ResepsiController@edit')->name('resepsi.edit');
Route::put('/resepsi/{id}', 'ResepsiController@update')->name('resepsi.update');
Route::delete('/resepsi/{id}', 'ResepsiController@destroy')->name('resepsi.destroy');