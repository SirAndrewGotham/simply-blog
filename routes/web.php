<?php

use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('posts', PostController::class);

Route::get('/language/{locale}', LanguageController::class)->name('locale');

Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
