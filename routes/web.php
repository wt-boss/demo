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

Route::post('/store','App\Http\Controllers\PostController@store')->name('post.store');
Route::get('/posts/create','App\Http\Controllers\PostController@create')->name('post.create');
Route::get('/','App\Http\Controllers\PostController@index')->name('index');
Route::get('/posts/{id}','App\Http\Controllers\PostController@show')->name('post.show');
Route::get('/contact','App\Http\Controllers\PostController@contact')->name('contact');
Route::get('/livres/create', 'App\Http\Controllers\Bookcontroller@create')->name('books.create');
Route::post('/livres', 'App\Http\Controllers\Bookcontroller@store')->name('books.store');
