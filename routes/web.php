<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function() {
    return view('layouts.app');
});

Route::resource('posts', PostController::class); 
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');