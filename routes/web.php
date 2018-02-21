<?php

use Illuminate\Support\Facades\Route;

// welcome
Route::get('/', 'WelcomeController@welcome')->name('welcome');