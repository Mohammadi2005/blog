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

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/create_post', [PostsController::class, 'create']);
Route::post('/create_post', [PostsController::class, 'checkCreatePost'])->name('check-create-post');
Route::get('/posts_user/{user_id}', [PostsController::class, 'postsUser']);
Route::get('/my_posts/{user_id}', [PostsController::class, 'myPosts']);
Route::delete('/delete_post/{post_id}', [PostsController::class, 'deletePost'])->name('delete_post');
Route::get('/edit_post/{post_id}', [PostsController::class, 'editPost'])->name('edit_post');
Route::put('/edit_post/{post_id}', [PostsController::class, 'updatePost'])->name('update_post');

Route::get('/comments/{post_id}', [PostsController::class, 'commentsPost']);
Route::post('/send_comment/{post_id}', [PostsController::class, 'sendComment'])->name('send_comment');
