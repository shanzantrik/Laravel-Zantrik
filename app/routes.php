<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'LoginController@index');
Route::get('login', 'LoginController@showLogin');
Route::post('login', array('as'=>'users.login', 'uses'=>'LoginController@doLogin'));
Route::get('logout', array('as'=>'users.logout', 'uses'=>'LoginController@doLogout'));

Route::group(array('before'=>array('auth'), 'prefix'=>'admin'), function() {
	//Dashboard
	Route::get('/', array('as'=>'admin.dashboard', 'uses'=>'admin\HomeController@dashboard'));

	//Category
	Route::get('category', array('as'=>'category.list', 'uses'=>'admin\CategoryController@index'));
	Route::get('category/create', array('as'=>'category.create', 'uses'=>'admin\CategoryController@create'));
	Route::post('category/create', array('as'=>'category.store', 'uses'=>'admin\CategoryController@store'));
	Route::get('category/edit/{id}', array('as'=>'category.edit', 'uses'=>'admin\CategoryController@edit'))->where('id', '[0-9]+');
	Route::put('category/update/{id}', array('as'=>'category.update', 'uses'=>'admin\CategoryController@update'))->where('id', '[0-9]+');
	Route::delete('category/delete/{id}', array('as'=>'category.delete', 'uses'=>'admin\CategoryController@destroy'))->where('id', '[0-9]+');

	//Profile
	Route::get('profile', array('as'=>'profile', 'uses'=>'admin\ProfileController@index'));
});
