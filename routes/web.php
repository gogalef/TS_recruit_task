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

Route::get('/add',
    [ArticleController::class, 'add']
)->name('articles.add');

Route::get('/edit/{id}',
    [ArticleController::class, 'edit']
)->name('articles.edit');

Route::get('/delete/{id}',
    [ArticleController::class, 'delete']
)->name('articles.delete');

Route::get('/test', function () {
    return view('welcome');
});


