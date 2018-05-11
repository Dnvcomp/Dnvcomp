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

Route::get('/errors/404', 'ErrorController@errorCode404');

Route::get('/', 'IndexController@index')->name('index');
Route::get('/index', 'IndexController@index')->name('index');

Route::group(['prefix' => 'home'], function() {
	Route::get('/notebook', 'IndexController@notebook')->name('notebook');
	Route::get('/computer', 'IndexController@computer')->name('computer');
	Route::get('/windows', 'IndexController@windows')->name('windows');
	Route::get('/about', 'IndexController@about')->name('about');
	Route::get('/sitemap', 'IndexController@sitemap')->name('sitemap');
	Route::get('/contacts', 'IndexController@contacts')->name('contacts');
});

Auth::routes();

Route::group(['prefix' => 'systems', 'middleware' => 'auth'], function() {
	Route::get('/windows-10', 'WindowsController@windowsten');
	Route::get('/windows-7', 'WindowsController@windowsseven');
});

