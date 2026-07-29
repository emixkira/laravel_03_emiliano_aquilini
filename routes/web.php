
<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'home'])
    ->name('home');

Route::get('/articoli', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('/articoli/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');