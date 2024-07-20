<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/posts', [PostController::class, 'blog']) -> name('posts.blog');
// Route::get('/posts/create', [PostController::class, 'create']) -> name('posts.create');
// Route::get('/posts/view', [PostController::class, 'view']) -> name('posts.view');

Route::resource('posts', PostController::class); 