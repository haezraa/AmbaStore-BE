<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\GameController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/games', [GameController::class, 'index']);
Route::get('/payments', [PaymentController::class, 'index']);
Route::post('/transaction', [TransactionController::class, 'store']);
Route::get('/games/{id}', [GameController::class, 'show']);
Route::get('/transaction/{invoice}', [TransactionController::class, 'checkStatus']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
