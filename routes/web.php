<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/portfolio', 'portfolio');
Route::view('/services', 'services');
Route::view('/resume', 'resume');

