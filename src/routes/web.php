<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\PostController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/mypage', [MyPageController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
