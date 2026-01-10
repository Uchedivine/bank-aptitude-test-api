<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'score', 
        'total_questions', 
        'answers'
    ];

    // Cast 'answers' to an array automatically when accessing it
    protected $casts = [
        'answers' => 'array',
    ];
}