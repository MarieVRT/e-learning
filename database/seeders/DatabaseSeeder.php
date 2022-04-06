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
        DB::table('language')->insert([
            'id' => 4,
            'name' => 'Php',
            'level' => '2',
        ]);

        //QUESTIONS
        DB::table('question')->insert([
            'id' => 1,
            'level' => '1',
            'question' => 'comment initialiser une variable en chaine de caractère ?',
            'choice_1' => 'x = string',
            'choice_2' => ' x = \'blabla\' ',
            'choice_3' => 'x == blabla',
            'choice_4' => 'x -= string',
            'answer' => ' x = \'blabla\' ',
            'language_id' => 3,
        ]);
        DB::table('question')->insert([
            'id' => 2,
            'level' => '2',
            'question' => 'comment éviter les fuites mémoire ?',
            'choice_1' => ' pas la bonne réponse',
            'choice_2' => ' bonne chance mec',
            'choice_3' => ' pas la bonne réponse',
            'choice_4' => ' pas la bonne réponse',
            'answer' => ' bonne chance mec',
            'language_id' => 3,
        ]);
        DB::table('question')->insert([
            'id' => 3,
            'level' => '1',
            'question' => 'comment créer une classe ?',
            'choice_1' => ' public static { ... }',
            'choice_2' => ' public class Main { ... }',
            'choice_3' => ' public Main { ... }',
            'choice_4' => ' public { ... }',
            'answer' => ' public class Main { ... }',
            'language_id' => 1,
        ]);
        DB::table('question')->insert([
            'id' => 4,
            'level' => '3',
            'question' => 'comment créer une classe ?',
            'choice_1' => ' public static { ... }',
            'choice_2' => ' public class Main { ... }',
            'choice_3' => ' public Main { ... }',
            'choice_4' => ' public { ... }',
            'answer' => ' public class Main { ... }',
            'language_id' => 3,
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
