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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth','admin']], function(){
	Route::group(['prefix' => 'ghost'], function(){
		Route::get('/', ['as' => 'admin.main.index', 'uses' => 'Admin\AdminController@index']);
		Route::get('/alpha', ['as' => 'welcome']);
	});
});

// Route::get('/admin', ['as' => 'admin.index', 'uses' => 'Admin\AdminController@index']);

Route::resource('admin','Admin\AdminController');