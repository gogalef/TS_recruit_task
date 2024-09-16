<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ArticleController as ApiArticleController;
use App\Http\Controllers\API\AuthController;




Route::post('api/login', [AuthController::class, 'login']);
Route::post('api/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('api/list', [ApiArticleController::class, 'list']);
    Route::post('api/add', [ApiArticleController::class, 'add']);
    Route::get('api/view/{id}', [ApiArticleController::class, 'view']);
    Route::post('api/edit/{id}', [ApiArticleController::class, 'edit']);
    Route::get('api/delete/resources/{id}', [ApiArticleController::class, 'delete']);
});

