<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //USERS
        DB::table('users')->insert([
            'id' => 1,
            'firstname' => 'louis',
            'lastname' => 'martin',
            'email' => 'louis.martin@gmail.com',
            'password' => bcrypt('louis'),
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'firstname' => 'marie',
            'lastname' => 'verraest',
            'email' => 'marie.verraest@gmail.com',
            'password' => bcrypt('marie'),
        ]);

        //LANGUAGES
        DB::table('language')->insert([
            'id' => 1,
            'name' => 'Java',
            'level' => '2',
        ]);
        DB::table('language')->insert([
            'id' => 2,
            'name' => 'C',
            'level' => '3',
        ]);
        DB::table('language')->insert([
            'id' => 3,
            'name' => 'Python',
            'level' => '1',
        ]);

        //QUESTIONS
        DB::table('question')->insert([
            'id' => 1,
            'question' => 'comment initialiser une variable en chaine de caractère ?',
            'language_id' => 3,
        ]);
        DB::table('question')->insert([
            'id' => 2,
            'question' => 'comment éviter les fuites mémoire ?',
            'language_id' => 2,
        ]);
        DB::table('question')->insert([
            'id' => 3,
            'question' => 'comment créer une classe ?',
            'language_id' => 1,
        ]);

        //ANSWERS
        DB::table('answer')->insert([
            'id' => 1,
            'answer' => ' x = \'blabla\' ',
            'question_id' => 3,
        ]);
        DB::table('answer')->insert([
            'id' => 2,
            'answer' => ' bonne chance mec',
            'question_id' => 2,
        ]);
        DB::table('answer')->insert([
            'id' => 3,
            'answer' => ' public class Main { ... }',
            'question_id' => 1,
        ]);

        //ADVANCEMENT
        DB::table('advancement')->insert([
            'id' => 1,
            'points' => 0,
            'language_id' => 3,
            'user_id' => 1,
        ]);
        DB::table('advancement')->insert([
            'id' => 2,
            'points' => 0,
            'language_id' => 2,
            'user_id' => 2,
        ]);
    }
}
