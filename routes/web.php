<?php

Route::get('/', 'IndexController@index')->name('index');

Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LogoutController@index')->name('logout');
