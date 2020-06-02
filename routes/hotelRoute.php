<?php

Route::get('admin/', 'HomeController@backendIndex')->name('backend.index');

//auth verify
Route::get('hotel/verifyemail/{token}', 'Auth\RegisterController@verify');
Route::resource('admin/hotel', 'HotelController');
Route::resource('admin/hotels/room', 'RoomController');
Route::resource('admin/book', 'BookController');
Route::resource('admin/review', 'ReviewController');

//Transport
Route::resource('admin/transports', 'TransportController'); 
Route::delete('admin/transpost/{id}','TransportController@destroy')->name('transpost.destroy');

//Tourist Area
Route::resource('admin/tourists', 'TouristController'); 
Route::delete('admin/tourist/{id}','TouristController@destroy')->name('tourist.destroy');

