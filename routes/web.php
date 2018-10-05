<?php

Route::get('/tasks', 'TaskController@index')->name('index');

Route::get('/takslist', 'TaskController@getAll')->name('takslist');

Route::get('/create', 'TaskController@create')->name('index2');

Route::post('/create', 'TaskController@store')->name('store');

