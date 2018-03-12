<?php

Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@posts');