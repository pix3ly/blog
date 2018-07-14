<?php

Route::get('/authenticate', 'AuthenticateController@get')->name('authenticate');
Route::post('/authenticate', 'AuthenticateController@post');

Route::middleware(['password'])->group(function () {
    Route::get('/', 'IndexController@index')->name('index');

    Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');
});

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LogoutController@index')->name('logout');

// Admin
Route::middleware(['admin_role'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('admin');

    Route::get('dashboard', 'Admin\DashboardController')->name('dashboard');

    Route::resource('posts', 'Admin\PostController')->only([
        'create', 'store'
    ]);

    Route::resource('tags', 'Admin\TagController')->only([
        'index', 'create', 'store', 'edit', 'update'
    ]);

    Route::get('settings', 'Admin\SettingController@get')->name('settings');
    Route::post('settings', 'Admin\SettingController@post');
});
