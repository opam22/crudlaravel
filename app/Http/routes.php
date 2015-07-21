<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
		'as' => 'index', 'uses' => 'CrudController@index'	
	]);

Route::get('create', [
 		'as' => 'create', 'uses' => 'CrudController@create'
	]);

Route::get('update/{id}', [
		'as' => 'update', 'uses' => 'CrudController@edit'
	]);

Route::get('delete/{id}', [
		'as' => 'delete', 'uses' => 'CrudController@delete'
	]);

Route::post('create', [
		'as' => 'create.student', 'uses' => 'CrudController@store'
	]);

Route::patch('update/{id}', [
		'as' => 'update.student', 'uses' => 'CrudController@update'
	]);

Route::get('register', [
		'as' => 'register', 'uses' => 'CrudController@register'
	]);

Route::post('register', [
		'as' => 'post.register', 'uses' => 'CrudController@postRegister'
	]);

Route::get('login', [
		'as' => 'login', 'uses' => 'CrudController@login'
	]);

Route::post('login', [
		'as' => 'post.login', 'uses' => 'CrudController@postLogin'
	]);

Route::get('logout', [
		'as' => 'logout', 'uses' => 'CrudController@logout'
	]);