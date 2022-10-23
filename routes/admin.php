<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/categories', [DashboardController::class, 'categories'])->name('categories.index');
