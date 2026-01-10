<?php

use Illuminate\Support\Facades\Route;
use App\Models\Question;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/force-update-year', function () {
    // This bypasses the 'fillable' protection and forces the update directly in SQL
    Question::query()->update(['year' => 2019]);
    return "Success! All questions are now 2019.";
});