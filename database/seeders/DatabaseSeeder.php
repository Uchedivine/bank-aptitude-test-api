<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Categories MUST be seeded FIRST before Questions
        $this->call([
            CategoriesTableSeeder::class,  // ← This must come first
            QuestionsTableSeeder::class,
        ]);
    }
}