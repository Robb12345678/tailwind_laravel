<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return 'First progress';
});
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::post('/posts', [PostController::class, 'store']);

Route::delete('/posts/{id}', [PostController::class, 'destroy']);