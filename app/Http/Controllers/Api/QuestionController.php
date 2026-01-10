<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Category;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        // 1. meaningful variable extraction
        $categorySlug = $request->query('category');
        $limit = $request->query('limit', 10); // Default to 10 questions if not specified

        // 2. Start building the query
        $query = Question::with('category'); // Eager load category to avoid N+1 problem

        // 3. Apply Filters if they exist
        if ($categorySlug) {
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        // 4. Randomize the order 
        $questions = $query->inRandomOrder()
                           ->limit($limit)
                           ->get();

        // 5. Return JSON response
        return response()->json([
            'status' => 'success',
            'count' => $questions->count(),
            'data' => $questions
        ], 200);
    }
}