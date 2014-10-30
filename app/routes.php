<?php


# -----------------pages-----------------

Route::resource('pages','PagesController');



# ------------ Authentication -----------------
Route::get('login', [
	'as' => 'login',
	'uses' => 'AuthController@getLogin'
]);
Route::post('login', [
	'as' => 'login',
	'uses' => 'AuthController@postLogin'
]);

