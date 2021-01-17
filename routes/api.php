<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/time', function () {
//   print_r(Carbon::now());
// });


Route::get('v1/posts', [PostController::class, 'index']);
Route::post('v1/posts', [PostController::class, 'store']);
Route::delete('v1/posts/{id}', [PostController::class, 'delete']);
Route::post('register', [RegisterController::class, 'index']);
Route::post('login', [LoginController::class, 'index']);
