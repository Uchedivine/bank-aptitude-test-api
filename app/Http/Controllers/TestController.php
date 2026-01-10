<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;   // Import the Question model
use App\Models\TestResult; // Import the TestResult model

class TestController extends Controller
{
    /**
     * Fetch questions for the API.
     * Route: GET /api/questions
     */
    public function index(Request $request)
    {
        // 1. Get available years for the dropdown (e.g., [2019, 2020])
        $available_years = Question::select('year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        // 2. Start the query
        $query = Question::with('category');

        // 3. Filter by Year (if provided in URL, e.g., ?year=2019)
        if ($request->has('year') && $request->year != 'all') {
            $query->where('year', $request->input('year'));
        }

        // 4. Get Questions (Random order)
        $questions = $query->inRandomOrder()->limit(50)->get();

        return response()->json([
            'data' => $questions,
            'years' => $available_years // <--- Sending years to frontend
        ], 200);
    }

    /**
     * Save the user's score.
     * Route: POST /api/submit-score
     */
    public function submit(Request $request)
    {
        // 1. Validate the incoming data from React
        $validated = $request->validate([
            'score' => 'required|integer',
            'total_questions' => 'required|integer',
            'answers' => 'nullable|array' // Accepts the JSON object of answers
        ]);

        // 2. Save to the Database
        // This assumes you have already run the migration for 'test_results'
        $result = TestResult::create([
            'score' => $validated['score'],
            'total_questions' => $validated['total_questions'],
            'answers' => $validated['answers'] ?? [], // Defaults to empty array if null
        ]);

        // 3. Return a success response
        return response()->json([
            'message' => 'Score saved successfully!',
            'data' => $result
        ], 201);
    }
}
