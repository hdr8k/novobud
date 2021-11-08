<?php

use Illuminate\Support\Facades\Route;

Route::post('/feedback', [\App\Http\Controllers\FormController::class, 'feedbackForm'])->name('feedbackForm');

Route::post('/recall', [\App\Http\Controllers\FormController::class, 'recall'])->name('recallForm');
