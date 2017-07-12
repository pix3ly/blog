<?php

Route::resource('/login', 'LoginController');
Route::resource('/blogs', 'BlogsController');
Route::resource('/posts', 'PostsController');
Route::resource('/posts/{id}/votes', 'PostsVotesController');
