<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function() {
    return redirect('/login');
});

Route::resource('posts', PostController::class); 
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
