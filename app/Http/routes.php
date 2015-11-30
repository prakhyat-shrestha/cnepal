<?php



/*static pages of our site*/
Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

Route::get('/', 'ArticlesController@index');
Route::resource('articles','ArticlesController');/*resource routes*/


Route::controllers ([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

	]);