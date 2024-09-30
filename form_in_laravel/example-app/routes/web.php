<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothesController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('clothes')->group(function () {
    Route::get('/', [ClothesController::class, 'index']);     // Clothes list
    Route::get('/{id}', [ClothesController::class, 'show']);  // Static views for each item
});
