<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->insert([
            'exercise_content' => 'Ile to jest 2+3?',
            'exercise_name'=>'2+3=',
            'answers' => '["8","7","-6"]',
            'correct_answer' => '5',
            'type' => 'Zamknięte',
        ]);

        DB::table('exercises')->insert([
            'exercise_content' => 'Ile to jest 2*8?',
            'exercise_name'=>'2*8=',
            'answers' => '["18","15","17"]',
            'correct_answer' => '16',
            'type' => 'Zamknięte',
        ]);

        DB::table('exercises')->insert([
            'exercise_content' => 'Ile to jest 0*0?',
            'exercise_name'=>'0*0=',
            'answers' => '["10","-10","0.00001"]',
            'correct_answer' => '0',
            'type' => 'Zamknięte',
        ]);

        DB::table('exercises')->insert([
            'exercise_content' => 'Ile to jest 2+2?',
            'exercise_name'=>'2+2=',
            'answers' => '',
            'correct_answer' => '4',
            'type' => 'Otwarte',
        ]);

        DB::table('exercises')->insert([
            'exercise_content' => 'Ile to jest 2*2+2?',
            'exercise_name'=>'2*2+2=',
            'answers' => '',
            'correct_answer' => '6',
            'type' => 'Otwarte',
        ]);

        DB::table('exercises')->insert([
            'exercise_content' => 'Ile to jest 3*6?',
            'exercise_name'=>'3*6=',
            'answers' => '',
            'correct_answer' => '18',
            'type' => 'Otwarte',
        ]);

        DB::table('exercises')->insert([
            'exercise_content' => 'Czy triangulacja Delaunaya jest grafem planarnym, czy moze nie?',
            'exercise_name'=>'Prawda czy fałsz?',
            'answers' => '',
            'correct_answer' => 'Prawda',
            'type' => 'Prawda-Fałsz',
        ]);

        DB::table('exercises')->insert([
            'exercise_content' => 'Czy kazdy prostokąt jest kwadratem?',
            'exercise_name'=>'Prawda czy fałsz?',
            'answers' => '',
            'correct_answer' => 'Fałsz',
            'type' => 'Prawda-Fałsz',
        ]);

        DB::table('exercises_users')->insert([
            'exercises_id' => '1',
            'users_id'=>'1',
        ]);

        DB::table('exercises_users')->insert([
            'exercises_id' => '2',
            'users_id'=>'1',
        ]);

        DB::table('exercises_users')->insert([
            'exercises_id' => '3',
            'users_id'=>'1',
        ]);

        DB::table('exercises_users')->insert([
            'exercises_id' => '1',
            'users_id'=>'2',
        ]);

        DB::table('exercises_users')->insert([
            'exercises_id' => '2',
            'users_id'=>'2',
        ]);

        DB::table('exercises_users')->insert([
            'exercises_id' => '3',
            'users_id'=>'2',
        ]);
        DB::table('exercises_users')->insert([
            'exercises_id' => '4',
            'users_id'=>'1',
        ]);
        DB::table('exercises_users')->insert([
            'exercises_id' => '5',
            'users_id'=>'1',
        ]);
        DB::table('exercises_users')->insert([
            'exercises_id' => '6',
            'users_id'=>'1',
        ]);
        DB::table('exercises_users')->insert([
            'exercises_id' => '7',
            'users_id'=>'1',
        ]);
        DB::table('exercises_users')->insert([
            'exercises_id' => '8',
            'users_id'=>'1',
        ]);
    }
}
