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
        Schema::dropIfExists('fill_blanks_answer');
        Schema::dropIfExists('fill_in_the_blanks');

        Schema::create('fill_blanks', function (Blueprint $table) {
            $table->id();
            $table->text('question_text');
            $table->json('options');
            $table->char('correct_answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fill_blanks');
    }
};
