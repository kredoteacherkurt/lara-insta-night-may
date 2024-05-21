<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/store/post/', [PostController::class, 'store'])->name('post.store');
    Route::get('/edit/post/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::get('/show/post/{id}', [PostController::class, 'show'])->name('post.show');
    Route::patch('/update/post/{id}', [PostController::class, 'show'])->name('post.update');
    Route::delete('/destroy/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');


    #comment

    Route::group(["as"=>"comment.", "prefix"=>"comment"], function () {
        Route::post('/store/{id}',[CommentController::class, 'store'])->name('store');
        Route::delete('/destroy/{id}',[CommentController::class, 'destroy'])->name('destroy');
    });

    Route::group(["as"=>"profile.", "prefix"=>"profile"], function () {
        Route::get('/show/{id}',[ProfileController::class,'show'])->name('show');
        Route::get('/edit',[ProfileController::class,'edit'])->name('edit');
        Route::patch('/update',[ProfileController::class,'update'])->name('update');

    });
    Route::group(["as"=>"like.", "prefix"=>"like"], function () {
        Route::post('/store/{id}',[LikeController::class, 'store'])->name('store');
        Route::delete('/destroy/{id}',[LikeController::class, 'destroy'])->name('destroy');
    });

});
