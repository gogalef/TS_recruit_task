<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

Route::get('/',
    [ArticlesController::class, 'list']
)->name('articles.list');

Route::get('/list',
    [ArticlesController::class, 'list']
)->name('articles.list');

Route::get('/view/{id}',
    [ArticlesController::class, 'view']
)->name('articles.view');

Route::get('/add',
    [ArticlesController::class, 'add']
)->name('articles.add');

Route::get('/edit/{id}',
    [ArticlesController::class, 'edit']
)->name('articles.edit');

Route::get('/delete/{id}',
    [ArticlesController::class, 'delete']
)->name('articles.delete');

Route::get('/test', function () {
    return view('welcome');
});


