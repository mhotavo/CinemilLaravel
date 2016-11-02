<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FrontController@index');
Route::get('series', 'FrontController@series');
Route::get('list', 'FrontController@list');
Route::get('news', 'FrontController@news');
Route::get('single', 'FrontController@single');
Route::get('contact', 'FrontController@contact');
Route::get('genres', 'FrontController@genres');
Route::get('short-codes', 'FrontController@shortcodes');
Route::get('admix', 'FrontController@admin');


Route::group(['prefix'=>'admix'], function(){

	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as' => 'users.destroy'
	]);

});





//Route::resource('movie', 'MovieController');