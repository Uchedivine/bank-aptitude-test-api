<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // 1. Allow these fields to be filled (Mass Assignment)
    protected $fillable = [
        'question_text', 
        'options', 
        'correct_option_index', 
        'category_id', 
        'explanation',
        'year' // <--- Ensure 'year' is here
    ];

    // 2. Cast options to Array automatically
    protected $casts = [
        'options' => 'array',
    ];

    // 3. Define the Relationship (FIXES THE LOADING ERROR)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}