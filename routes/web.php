<?php

Route::resource('/blogs', 'BlogsController');
Route::resource('/posts', 'PostsController');
Route::resource('/posts/{id}/votes', 'PostsVotesController');
