<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\testController;

// Public endpoints - no authentication required
Route::get('/questions', [testController::class, 'index']);
Route::post('/submit-score', [testController::class, 'submit']);