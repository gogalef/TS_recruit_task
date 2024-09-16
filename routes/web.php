<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/',
    [ArticleController::class, 'list']
)->name('articles.list');

Route::get('/list',
    [ArticleController::class, 'list']
)->name('articles.list');

Route::get('/view/{id}',
    [ArticleController::class, 'view']
)->name('articles.view');



