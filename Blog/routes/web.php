<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'checkLogin'])->name('check-login');

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'checkRegister'])->name('check-register');

Route::get('/posts', [PostsController::class, 'index']);
Route::get('/create_post', [PostsController::class, 'create']);
Route::post('/create_post', [PostsController::class, 'checkCreatePost'])->name('check-create-post');
Route::get('/posts_user/{id}', [PostsController::class, 'postsUser']);

