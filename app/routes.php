<?php
Route::delete("/user/delete/{username}",'userController@destroy');
Route::get('/register','userController@create');
Route::post('/register',array('uses'=>'userController@store'));
Route::get('/user/welcome',function(){
	return View::make('/user/welcome');
	});
Route::get('/user/admin','userController@index');
Route::resource('session','sessionController');
Route::get('login','sessionController@create');
Route::get('user/logout','sessionController@destroy');
Route::get('/user/admin_sign','sessionController@create');
Route::get('/admin',function(){
	return Redirect::to('user/admin');
})->before('auth');
Route::patch("/user/edit/{userid}",array('uses'=>'userController@edit'));
Route::patch("/user/edit/{userid}",array('uses'=>'userController@update'));
