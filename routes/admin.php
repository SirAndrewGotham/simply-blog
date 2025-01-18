<?php

use App\Http\Controllers\Backend\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);
