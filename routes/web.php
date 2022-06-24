<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/resume', 'resume');
Route::view('/projects', 'projects');
Route::view('/datascience', 'datascience');
Route::view('/presentations', 'presentations');
Route::view('/post', 'post');
Route::view('/contact', 'contact');
Route::view('/terms', 'terms');
Route::view('/privacy', 'privacy');
