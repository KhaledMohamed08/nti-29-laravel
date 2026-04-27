<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('home', HomeController::class);