<?php

use App\Http\Controllers\RespondenController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RespondenController::class, 'index'])->name('responden.index');
Route::get('/assessment', [RespondenController::class, 'assessment'])->name('responden.assessment');
