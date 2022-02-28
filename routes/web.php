<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\FeedbacksController;

Route::get('/', [ArticlesController::class, 'index'])->name('main');

Route::get('/about', [ArticlesController::class, 'about'])->name('about');

Route::get('/articles/create', [ArticlesController::class, 'create'])->name('article.create');

Route::post('/articles', [ArticlesController::class, 'store'])->name('articles');

Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('article.show');

Route::get('/contacts', [FeedbacksController::class, 'create'])->name('contacts');

Route::post('/contacts', [FeedbacksController::class, 'store']);

Route::get('/admin/feedbacks', [FeedbacksController::class, 'show'])->name('admin.feedbacks');
