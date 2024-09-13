<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthorMiddleware;
use App\Http\Controllers\Author\PostController as AuthorPostController;

Route::get('/', function () {
    return redirect('/login');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    // Public post routes
    Route::resource('posts', PostController::class);
});

Route::middleware(['auth', AuthorMiddleware::class])->prefix('author')->name('author.')->group(function () {
    Route::resource('posts', AuthorPostController::class);
});

Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('posts', AdminPostController::class);
});

Auth::routes();


