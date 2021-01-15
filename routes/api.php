<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('v1/posts', [PostController::class, 'index']);
Route::post('v1/posts', [PostController::class, 'store']);
Route::post('register', [RegisterController::class, 'index']);

Route::group(['prefix' => 'auth'], function () {


    Route::post('login', [LoginController::class, 'index']);
    //Route::get('posts', [Po::class, 'index']);
});
