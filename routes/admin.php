<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('categories', CategoryController::class);
Route::resource('pages', PageController::class);
