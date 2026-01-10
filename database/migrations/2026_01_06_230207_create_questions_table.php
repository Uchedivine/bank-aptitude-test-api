<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::create('questions', function (Blueprint $table) {
        $table->id();
        $table->longText('question_text'); // Changed to longText for longer questions
        $table->json('options');
        $table->integer('correct_option_index'); // 0=A, 1=B, 2=C, 3=D
        $table->foreignId('category_id')->constrained()->cascadeOnDelete(); // 1=Verbal, 2=Numerical, etc.
        $table->text('explanation')->nullable();
        
        // NEW: The Year Column
        $table->integer('year')->default(2024); 
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
