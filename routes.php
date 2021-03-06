<?php 

Route::get('/', 'LoginController@index');
Route::post('/login', 'LoginController@login');

Route::get('/signup', 'RegisterController@index');
Route::post('/signup', 'RegisterController@signup');
Route::get('/thankyou', 'RegisterController@thankyou');

Route::get('/welcome', 'WelcomeController@index');
Route::get('/logout', 'WelcomeController@logout');

Route::any('*', 'ErrorController@notFoud');
