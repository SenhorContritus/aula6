<?php

use Illuminate\Support\Facades\Route;

Route::get('/',["uses" => "App\Http\Controllers\mainController@index"]);
Route::get("/babiba", ["uses" => "App\Http\Controllers\BabibaController@index"]);
Route::get("/babidi", ["uses" => "App\Http\Controllers\BabidiController@index"]);