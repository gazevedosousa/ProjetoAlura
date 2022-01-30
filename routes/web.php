<?php

Route::get('/series', 'App\Http\Controllers\SeriesController@index')
    ->name('index');
Route::get('/series/criar', 'App\Http\Controllers\SeriesController@create')
    ->name('adicionar_series');
Route::post('/series/criar', 'App\Http\Controllers\SeriesController@store');
Route::delete('/series/{id}', 'App\Http\Controllers\SeriesController@destroy');