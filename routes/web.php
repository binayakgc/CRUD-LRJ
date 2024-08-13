<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function() {
    return redirect('/login');
});

Route::prefix('admin')->middleware(['auth', AdminMiddleware::class]) -> name('admin.') ->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('posts', AdminPostController::class);
});

Route::resource('posts', PostController::class); 
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

