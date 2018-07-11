<?php

Route::get('/', 'IndexController@index')->name('index');

Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LogoutController@index')->name('logout');

// Admin
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
})->name('admin');

Route::get('/admin/dashboard', 'Admin\DashboardController')->name('admin.dashboard');

Route::get('/admin/posts/create', 'Admin\PostController@create')->name('admin.posts.create');
Route::post('/admin/posts', 'Admin\PostController@store');
