<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/post/create',[PostController::class,'create'])->name('post.create');
    Route::post('/store/post/',[PostController::class,'store'])->name('post.store');
    Route::get('/edit/post/{id}',[PostController::class,'edit'])->name('post.edit');
    Route::get('/show/post/{id}',[PostController::class,'show'])->name('post.show');
    Route::patch('/update/post/{id}',[PostController::class,'show'])->name('post.update');
    Route::delete('/destroy/post/{id}',[PostController::class,'destroy'])->name('post.destroy');
});

