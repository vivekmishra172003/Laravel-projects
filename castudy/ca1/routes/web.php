<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {
    return view('about');
});
Route::get('/post/{id?}', function (string $id=null) {
    return "<h1></h1>Post $id</h1>";
});
