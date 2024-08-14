<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('posts')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('post.index');

    Route::get('/criarPost', [PostController::class, 'criarPost'])->name('post.criar');
    Route::post('/criarPost', [PostController::class, 'criarPost'])->name('post.criar');
});