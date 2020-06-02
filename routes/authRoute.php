<?php

//Auth::routes();
//backend auth
Route::get('hotel/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('hotel/login', 'Auth\LoginController@login');
Route::post('hotel/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('hotel/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('hotel/register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('hotel/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('hotel/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('hotel/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('hotel/password/reset', 'Auth\ResetPasswordController@reset');

//end backend auth


