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
        Schema::create('fill_blanks_answer', function (Blueprint $table) {
            $table->id();
            $table->string('answer_text');
            $table->boolean('is_correct');
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('fill_in_the_blanks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fill_blanks_answer');
    }
};
