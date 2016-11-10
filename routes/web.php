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

Auth::routes();
Route::get('admix', 'HomeController@index');



Route::get('/', 'FrontController@index');
Route::get('series', 'FrontController@series');
Route::get('list', 'FrontController@list');
Route::get('news', 'FrontController@news');
Route::get('single', 'FrontController@single');
Route::get('contact', 'FrontController@contact');
Route::get('genres', 'FrontController@genres');
Route::get('short-codes', 'FrontController@shortcodes');
#Route::get('admix', 'FrontController@admin')->middleware('auth');


Route::group(['prefix'=>'admix'], function(){
	#Users
	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as' => 'users.destroy'
		]);
	#Sources
	Route::resource('sources', 'SourcesController');
	Route::get('sources/{id}/destroy',[
		'uses' => 'SourcesController@destroy',
		'as' => 'sources.destroy'
		]);
	#Genders
	Route::resource('genders', 'GendersController');
	Route::get('genders/{id}/destroy',[
		'uses' => 'GendersController@destroy',
		'as' => 'genders.destroy'
		]);
	#Producers
	Route::resource('producers', 'ProducersController');
	Route::get('producers/{id}/destroy',[
		'uses' => 'ProducersController@destroy',
		'as' => 'producers.destroy'
		]);
	#Servers
	Route::resource('servers', 'ServersController');
	Route::get('servers/{id}/destroy',[
		'uses' => 'ServersController@destroy',
		'as' => 'servers.destroy'
		]);
	#Lenguajes
	Route::resource('lenguages', 'LenguagesController');
	Route::get('lenguages/{id}/destroy',[
		'uses' => 'LenguagesController@destroy',
		'as' => 'lenguages.destroy'
		]);

});

