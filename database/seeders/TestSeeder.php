<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testId = DB::table('tests')->insertGetId([
            'name'=> 'Test',
            'description' => 'Multiple question type',
            'type' => 'multiple-choice',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

       

        $questions = [
            'Ano ang kasingkahulugan ng sakuna?' => 'Aksidente',
            'Ano ang kasingkahulugan ng aksidente?'=>'Sakuna',
            'Ano ang kasingkahulugan ng alaala?' => 'Gunita',
            'Ano ang kasingkahulugan ng gunita?'=> 'Alaala',
            'Ano ang kasingkahulugan ng alapaap?' => 'Ulap',
            'Ano ang kasingkahulugan ng ulap?' => 'Alapaap',
        ];
        $allQuestions = array_keys($questions);
        $allAnswers = array_values($questions);
        $seedData = [];
        foreach ($questions as $questionText => $correctAnswer) {
            $options = getRandomOptions($correctAnswer, $allAnswers);

            // Shuffle options to ensure random order
            shuffle($options);

            // Insert the correct answer into a random position in the options array
            $correctIndex = array_rand($options);
            array_splice($options, $correctIndex, 0, $correctAnswer);

            // Format options for seeding into the database
            $formattedOptions = [];
            foreach ($options as $optionText) {
                $formattedOptions[] = [
                    'option_text' => $optionText,
                    'status' => $optionText === $correctAnswer ? 1 : 0,
                ];
            }
            $seedData[] = [
                'text' => $questionText,
                'type' => 'synonym',
                'options' => $formattedOptions,
            ];

        }

        foreach ($seedData as $question) {
            $questionId = DB::table('questions')->insertGetId([
                'text' => $question['text'],
                'type' => $question['type'],
                'test_id' => $testId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        foreach ($question['options'] as $option) {
            DB::table('options')->insert([
                'question_id' => $questionId,
                'option_text' => $option['option_text'],
                'status' => $option['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
}
if (!function_exists('getRandomOptions')) {
    function getRandomOptions($correctAnswer, $allAnswers) {
        $otherAnswers = array_filter($allAnswers, fn($answer) => $answer !== $correctAnswer);
        $randomOptions = array_rand(array_flip($otherAnswers), min(3, count($otherAnswers)));
        return is_array($randomOptions) ? $randomOptions : [$randomOptions];
    }
}
