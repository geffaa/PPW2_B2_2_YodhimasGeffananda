<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/', \App\Http\Controllers\PostController::class);