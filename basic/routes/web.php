<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/post', function () {
//     return view('post');
// });
    Route::get('/why me', function () {
    });
Route::view('post','/post');
