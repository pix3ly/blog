<?php

Route::get('/', 'IndexController@index')->name('index_get');
Route::get('/posts/{id}', 'PostsController@show')->name('posts_get');
