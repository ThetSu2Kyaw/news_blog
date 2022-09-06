<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::post('/blogs/{blog:slug}/comments', [CommentController::class, 'create'])->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->middleware('guest');

Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/login', [AuthController::class, 'post_login'])->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware('can:admin')->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/blogs', [AdminController::class, 'show']);
    Route::get('/admin/blogs/create', [AdminController::class, 'create']);
    Route::post('/admin/blogs/store', [AdminController::class, 'store']);

    Route::get('/admin/blogs/{blog:slug}/edit', [AdminController::class, 'edit']);
    Route::patch('/admin/blogs/{blog:slug}/edit', [AdminController::class, 'update']);

    Route::delete('/admin/blogs/{blog:slug}/delete', [AdminController::class, 'destroy']);
});
