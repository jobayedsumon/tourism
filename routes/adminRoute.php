<?php
Route::get('admin/profile', 'HomeController@profile')->name('profile.index');
Route::get('admin/profile/edit', 'HomeController@edit')->name('profile.edit');
Route::put('admin/profile/update', 'HomeController@update')->name('profile.update');
Route::put('admin/profile/password/update', 'HomeController@passwordUpdate')->name('user.password');
Route::put('admin/profile/picture/update', 'HomeController@profilePicture')->name('user.picture');