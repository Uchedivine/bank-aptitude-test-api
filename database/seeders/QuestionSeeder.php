<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Category;
use Illuminate\Support\LazyCollection;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        // Step 1: Open the CSV file from the database/data folder
        $csvFilePath = base_path('database/data/questions.csv');

        // Check if file exists to prevent "file not found" error
        if (!file_exists($csvFilePath)) {
            $this->command->error("CSV file not found at: $csvFilePath");
            return;
        }

        $fileHandle = fopen($csvFilePath, 'r');

        // Step 2: Skip the first row (header row)
        fgetcsv($fileHandle);

        // Step 3: Process the CSV file efficiently
        LazyCollection::make(function () use ($fileHandle) {
            while (($csvRow = fgetcsv($fileHandle)) !== false) {
                yield $csvRow;
            }
        })
        ->chunk(100)
        ->each(function ($batchOfRows) {
            
            foreach ($batchOfRows as $csvRow) {
                
                // --- CRITICAL FIX: VALIDATION START ---
                // We expect at least 7 columns (0 to 6). 
                // If a row has fewer (e.g., empty line or bad quoting), skip it to prevent crash.
                if (count($csvRow) < 7) {
                    continue; 
                }
                
                // Extract data
                $categoryName = $csvRow[0];
                $questionText = $csvRow[1];
                $optionA      = $csvRow[2];
                $optionB      = $csvRow[3];
                $optionC      = $csvRow[4];
                $optionD      = $csvRow[5];
                $correctAnswerIndex = $csvRow[6];
                $explanation  = $csvRow[7] ?? null;

                // Extra safety: Skip if question text is empty
                if (empty(trim($questionText))) {
                    continue;
                }
                // --- VALIDATION END ---

                // Find or create Category
                $category = Category::firstOrCreate(
                    ['slug' => \Str::slug($categoryName)], 
                    ['name' => trim($categoryName)]
                );

                // Create Question
                Question::create([
                    'category_id' => $category->id,
                    'question_text' => trim($questionText),
                    'options' => [
                        trim($optionA), 
                        trim($optionB), 
                        trim($optionC), 
                        trim($optionD)
                    ],
                    'correct_option_index' => (int)$correctAnswerIndex,
                    'explanation' => $explanation,
                ]);
            }
        });

        // Step 4: Close the file
        fclose($fileHandle);
    }
}