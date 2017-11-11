<?php

use Illuminate\Support\Facades\Route;

// brawlers routes
Route::get('/brawlers', 'Api\BrawlerController@index');
Route::get('/brawlers/{slug}', 'Api\BrawlerController@show');

// modes routes
Route::get('/modes', 'Api\ModeController@index');
Route::get('/modes/{slug}', 'Api\ModeController@show');

// maps routes
Route::get('/maps', 'Api\MapController@index');
Route::get('/maps/{slug}', 'Api\MapController@show');