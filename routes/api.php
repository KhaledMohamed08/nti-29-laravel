<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Posts\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get('posts', [PostController::class, 'index']);
// Route::post('posts', [PostController::class, 'store']);

Route::apiResource('posts', PostController::class)->except(['store', 'update']);
Route::apiResource('posts', PostController::class)->only(['store', 'update'])->middleware('auth:sanctum');

Route::post('login', [AuthController::class, 'login']);