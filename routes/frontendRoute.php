<?php

//frontend auth
Route::get('login', 'CustomerAuth\LoginController@showLoginForm')->name('customer.login');
Route::post('login', 'CustomerAuth\LoginController@login');
Route::post('logout', 'CustomerAuth\LoginController@logout')->name('customer.logout');

// Registration Routes...
Route::get('register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('customer.register');
Route::post('register', 'CustomerAuth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('customer.password.request');
Route::post('password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('customer.password.email');
Route::get('password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm')->name('customer.password.reset');
Route::post('password/reset', 'CustomerAuth\ResetPasswordController@reset');


Route::get('/', 'HomeController@frontendIndex')->name('frontend.index');


Route::get('/search','HomeController@search');
 
Route::get('/hotel/{id}','HomeController@viewhotel');
Route::get('/show-hotel/','HomeController@showhotel');

Route::post('/find','HomeController@find');

Route::get('/hotel-booking','HomeController@booking')->name('user.book');
Route::get('/me-profile','HomeController@Userprofile')->name('user.profile');
Route::get('/me-profile-edit','HomeController@UserprofileEdit')->name('user.profileedit');
Route::put('/me-profile-update','CustomerAuth\RegisterController@updatecustomer')->name('user.update-profile');

//Transport 
Route::get('/transport', 'HomeController@transports')->name('frontend.transport');
Route::get('/find-transport','HomeController@findTransport');
Route::get('/find-transport/{id}','HomeController@viewTransport');
Route::get('/show-transport','HomeController@showTransport');


//Tourist 
Route::get('/tourist', 'HomeController@tourists')->name('frontend.tourist');
Route::get('/find-tourist','HomeController@findTourist');
Route::get('/find-tourist/{id}','HomeController@viewTourist');
Route::get('/show-tourist','HomeController@showTourist');


//Write review
Route::post('/write/review/{id}','RatingController@writeReview')->name('write.review');

//Write checkout Comment
Route::post('/write/checkout/{id}','CheckoutCommentController@writeCheckoutComments')->name('write.checkout');



 