<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FinishController;

Route::get('/', [IndexController::class, 'index']);
Route::post('/', [IndexController::class, 'post']);
Route::get('/finish', [FinishController::class, 'index']);
