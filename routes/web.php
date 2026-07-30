<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'home'])->name('home');

Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articoli/{id}', [ArticleController::class, 'show'])->name('articles.show');