<?php

Route::get('/series', 'App\Http\Controllers\SeriesController@index');
Route::get('/series/criar', 'App\Http\Controllers\SeriesController@create');