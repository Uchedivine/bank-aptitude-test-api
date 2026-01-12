<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\TestController;

// Public endpoints - no authentication required
Route::get('/questions', [TestController::class, 'index']);
Route::post('/submit-score', [TestController::class, 'submit']);
Route::get('/categories', function() {
    return response()->json(\App\Models\Category::all());
});