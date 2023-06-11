<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FillBlanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fill_blanks')->insert([
            [
                'question_text' => 'This _____ should only be taken as directed by a qualified physician.',
                'options' => json_encode(['medication', 'medically', 'medicated', 'medications']),
                'correct_answer' => 'medication',
            ],
            [
                'question_text' => 'The jewelry box is covered in a thin layer of hand-stitched black leather stretched _____ around the frame.',
                'options' => json_encode(['tightening', 'tightly', 'tighten', 'tightness']),
                'correct_answer' => 'tightening',
            ],
            [
                'question_text' => 'Fun Toys is pleased to announce two shipments of the popular game will arrive this month, the first of which should come _____.',
                'options' => json_encode(['shortly', 'shorten', 'short', 'shortness']),
                'correct_answer' => 'shortly',
            ],
            [
                'question_text' => "Ms. Watanabe's new coffee tumbler, which cost over 30 dollars, is stylish as well as _____.",
                'options' => json_encode(['function', 'functioned', 'functional', 'functionally']),
                'correct_answer' => 'functional',
            ],
            [
                'question_text' => 'When placing an order during holiday seasons, please note that it will take _____ five to seven days for the delivery.',
                'options' => json_encode(['approximate', 'approximately', 'approximation', 'approximates']),
                'correct_answer' => 'approximately',
            ],
        ]);
    }
}
