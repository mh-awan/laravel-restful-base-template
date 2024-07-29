<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/Products', [ProductsController::class, 'index']);
Route::get('/Products/{id}', [ProductsController::class, 'show']);
Route::post('/Products', [ProductsController::class, 'store']);
Route::put('/Products/{id}', [ProductsController::class, 'update']);
Route::delete('/Products/{id}', [ProductsController::class, 'destroy']);
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
