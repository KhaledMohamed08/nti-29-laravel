<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Posts\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('home', HomeController::class);

Route::prefix('posts/')->name('posts.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::get('/{post}', [PostController::class, 'show'])->name('show');
    Route::post('/', [PostController::class, 'store'])->name('store');
    Route::get('{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::put('/{post}', [PostController::class, 'update'])->name('update');
    Route::delete('/{post}', [PostController::class, 'destroy'])->name('destroy');
});