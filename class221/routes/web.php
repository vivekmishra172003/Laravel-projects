<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('user_form');
});

Route::post('/user-form', function (Request $request) {
    // Corrected: Get all form data
    $data = $request->all();

    // Pass the data to the view
    return view('user_form', ['data' => $data]);
});

Route::get('/get-userdata', function () {
    return view('');
