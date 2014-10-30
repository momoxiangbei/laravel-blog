<?php

#------------------test------------------
// Route::get('1', 'TestController@index');
// Route::get('11', function(){
// 	return View::make('test');
// });
Route::get('11', [
	'as' => 'test',
	'uses' => 'TestController@index'
]);
Route::resource('test2','test2Controller');



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

