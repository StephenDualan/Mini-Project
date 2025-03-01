<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/form', 'auth.register');
Route::view('/list', 'list');
Route::view('/users', 'users');
Route::view('/media', 'media');
Route::view('/blog', 'blog');
Route::view('/styling', 'styling');

