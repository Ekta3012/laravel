<?php
Route::get('/register','userController@create');
Route::post('/register',array('uses'=>'userController@store'));
Route::get('/user/welcome',function(){
	return View::make('/user/welcome');
	});
Route::get('/user/admin','userController@index');
Route::get('/user/admin/delete?{$username}','userController@destroy');
Route::post('/user/delete',function(){
	return View::make('/user/delete');
});
Route::resource('session','sessionController');
Route::get('login','sessionController@create');
Route::get('logout','sessionController@destroy');
