<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resources>
 */
class ResourcesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $types = ['lesson_plan', 'worksheet', 'presentation', 'assessment', 'other'];
        $subjects = ['math', 'science', 'history', 'language_arts', 'other'];
        $gradeLevels = ['K', '1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '10th', '11th', '12th'];
        
        // Generate realistic titles based on type and subject
        $type = fake()->randomElement($types);
        $subject = fake()->randomElement($subjects);
        
        $titles = [
            'lesson_plan' => [
                'math' => ['Introduction to Fractions', 'Multiplication Tables Mastery', 'Geometry Basics', 'Word Problems Strategy'],
                'science' => ['Plant Life Cycle', 'States of Matter', 'Solar System Exploration', 'Simple Machines'],
                'history' => ['American Revolution', 'Ancient Egypt', 'Civil War Timeline', 'World War II'],
                'language_arts' => ['Creative Writing Workshop', 'Reading Comprehension Skills', 'Grammar Fundamentals', 'Poetry Analysis'],
                'other' => ['Critical Thinking Skills', 'Study Habits', 'Time Management', 'Research Methods']
            ],
            'worksheet' => [
                'math' => ['Addition Practice Sheet', 'Division Worksheets', 'Algebra Problems', 'Math Facts Drill'],
                'science' => ['Lab Safety Quiz', 'Periodic Table Practice', 'Weather Patterns', 'Animal Classifications'],
                'history' => ['Timeline Activity', 'Map Skills Practice', 'Historical Figures', 'Cause and Effect'],
                'language_arts' => ['Vocabulary Builder', 'Sentence Structure', 'Reading Comprehension', 'Spelling Practice'],
                'other' => ['Problem Solving', 'Logic Puzzles', 'Brain Teasers', 'Study Guide']
            ],
            'presentation' => [
                'math' => ['Pythagorean Theorem Explained', 'Statistics in Daily Life', 'Math History Timeline', 'Calculating Percentages'],
                'science' => ['Photosynthesis Process', 'Human Body Systems', 'Rock Cycle', 'Weather Patterns'],
                'history' => ['Ancient Civilizations', 'Industrial Revolution', 'Constitutional Convention', 'Immigration Stories'],
                'language_arts' => ['Shakespeare Introduction', 'Poetry Through Ages', 'Novel Analysis', 'Writing Process'],
                'other' => ['Digital Citizenship', 'Career Exploration', 'Goal Setting', 'Leadership Skills']
            ],
            'assessment' => [
                'math' => ['Fractions Test', 'Geometry Quiz', 'Math Skills Assessment', 'Problem Solving Evaluation'],
                'science' => ['Lab Practical Exam', 'Science Fair Rubric', 'Unit Test Review', 'Scientific Method Quiz'],
                'history' => ['Chapter Assessment', 'Historical Analysis', 'Map Skills Test', 'Research Project Rubric'],
                'language_arts' => ['Reading Assessment', 'Writing Portfolio', 'Grammar Test', 'Vocabulary Quiz'],
                'other' => ['Skills Checklist', 'Performance Rubric', 'Self Assessment', 'Peer Evaluation']
            ],
            'other' => [
                'math' => ['Math Games Collection', 'Calculator Tips', 'Math Journal Prompts', 'Real World Math'],
                'science' => ['Science Fair Ideas', 'Lab Equipment Guide', 'Science Journal', 'STEM Activities'],
                'history' => ['Historical Documents', 'Timeline Template', 'Research Guidelines', 'Primary Sources'],
                'language_arts' => ['Reading List', 'Writing Prompts', 'Book Report Template', 'Discussion Questions'],
                'other' => ['Classroom Rules', 'Student Planner', 'Parent Communication', 'Behavior Chart']
            ]
        ];

        $title = fake()->randomElement($titles[$type][$subject] ?? ['Educational Resource']);

        return [
            'title' => $title,
            'description' => fake()->paragraph(fake()->numberBetween(2, 4)),
            'download_count' => fake()->numberBetween(0, 500),
        ];
    }
}
