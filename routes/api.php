<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\GameController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RewardController;
use Illuminate\Support\Facades\Route;

Route::get('/games', [GameController::class, 'index']);
Route::get('/payments', [PaymentController::class, 'index']);
Route::post('/transaction', [TransactionController::class, 'store']);
Route::get('/games/{id}', [GameController::class, 'show']);
Route::post('/check-nickname', [\App\Http\Controllers\Api\GameController::class, 'checkNickname']);
Route::get('/transaction/{invoice}', [TransactionController::class, 'checkStatus']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/claim-coin', [RewardController::class, 'claimCoin']);

});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
