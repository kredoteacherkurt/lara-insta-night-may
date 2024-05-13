<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/post/create',[PostController::class,'create'])->name('post.create');
    Route::post('/store/post/',[PostController::class,'store'])->name('post.store');
});

