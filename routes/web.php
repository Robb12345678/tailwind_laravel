<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return 'First progress';
});
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);