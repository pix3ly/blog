<?php

Route::get('/authenticate', 'AuthenticateController@get')->name('authenticate');
Route::post('/authenticate', 'AuthenticateController@post');

Route::middleware(['password'])->group(function () {
    Route::get('/', 'IndexController@index')->name('index');

    Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');
});

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LogoutController@index')->name('logout');

// Admin
Route::middleware(['admin_role'])->group(function () {
    Route::get('/admin', function () {
        return redirect()->route('admin.dashboard');
    })->name('admin');

    Route::get('/admin/dashboard', 'Admin\DashboardController')->name('admin.dashboard');

    Route::get('/admin/posts/create', 'Admin\PostController@create')->name('admin.posts.create');
    Route::post('/admin/posts', 'Admin\PostController@store');

    Route::get('/admin/tags', 'Admin\TagController@index')->name('admin.tags.index');
    Route::get('/admin/tags/create', 'Admin\TagController@create')->name('admin.tags.create');
    Route::post('/admin/tags', 'Admin\TagController@store');
    Route::get('/admin/tags/{id}/edit', 'Admin\TagController@edit')->name('admin.tags.edit');
    Route::put('/admin/tags/{id}', 'Admin\TagController@update');

    Route::get('/admin/settings', 'Admin\SettingController@get')->name('admin.settings');
    Route::post('/admin/settings', 'Admin\SettingController@post');
});
