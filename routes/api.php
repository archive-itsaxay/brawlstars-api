<?php

use Illuminate\Support\Facades\Route;

// brawlers routes
Route::get('/brawlers', 'Api\BrawlerController@index')->name('brawlers.index');
Route::get('/brawlers/{slug}', 'Api\BrawlerController@show')->name('brawlers.show');

// modes routes
Route::get('/modes', 'Api\ModeController@index')->name('modes.index');
Route::get('/modes/{slug}', 'Api\ModeController@show')->name('modes.show');

// maps routes
Route::get('/maps', 'Api\MapController@index')->name('maps.index');
Route::get('/maps/{slug}', 'Api\MapController@show')->name('maps.show');