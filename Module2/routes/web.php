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

Route::get('/', 'App\Http\Controllers\TodolistController@showAllData');
Route::get('delete/{id}', 'App\Http\Controllers\TodolistController@delete');
Route::get('create', 'App\Http\Controllers\TodolistController@create');
Route::get('insertTodo', 'App\Http\Controllers\TodolistController@insertTodo');
Route::get('edit/{id}', 'App\Http\Controllers\TodolistController@edit');
Route::get('editTodo/{id}', 'App\Http\Controllers\TodolistController@editTodo');
