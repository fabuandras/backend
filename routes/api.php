<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanuloszobakController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tanuloszobak', [TanuloszobakController::class, 'index']);
Route::get('/szobatipusok', [TanuloszobakController::class, index]);
Route::put('/tanuloszobak/{id}', [TanuloszobakController::class, 'update']);
Route::delete('/tanuloszobak/{id}', [TanuloszobakController::class, 'destroy']);