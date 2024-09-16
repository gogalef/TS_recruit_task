<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\AuthController;


Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('list', [ArticleController::class, 'list']);
Route::get('view/{id}', [ArticleController::class, 'view']);

Route::middleware('auth:sanctum')->group(function () {
//    Route::get('list', [ArticleController::class, 'list']);
    Route::post('add', [ArticleController::class, 'add']);
  //  Route::get('view/{id}', [ArticleController::class, 'view']);
    Route::post('edit/{id}', [ArticleController::class, 'edit']);
    Route::get('delete/{id}', [ArticleController::class, 'delete']);
});

