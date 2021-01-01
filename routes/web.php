<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello','App\Http\Controllers\HelloController@index')
    ->middleware('helo');
Route::post('hello','App\Http\Controllers\HelloController@post');
