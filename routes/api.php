<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/games', [GameController::class, 'index']);

Route::get('/games/{id}', [GameController::class, 'show']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
