<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\HomePageController;

Route::get('/', [HomePageController::class, 'homePage'])->name('index');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
