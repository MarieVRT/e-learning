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
            'gender' => 'male',
            'password' => bcrypt('louismartin'),
            'is_easy_admin' => false
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'firstname' => 'marie',
            'lastname' => 'verraest',
            'email' => 'marie.verraest@gmail.com',
            'gender' => 'female',
            'password' => bcrypt('marieverraest'),
            'is_easy_admin' => true
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
        'question' => 'Quelle est la balise la plus courante pour intégrer PHP au HTML?',
        'choice_1' => 'test1',
        'choice_2' => 'test2',
        'choice_3' => '@php()',
        'choice_4' => '<!PHP>',
        'answer' => 'test1',
        'language_id' => 4,
        ]);
        DB::table('question')->insert([
        'id' => 2,
        'level' => '2',
        'question' => 'PHP est-il un langage de programmation POO',
        'choice_1' => 'Oui',
        'choice_2' => 'Non',
        'choice_3' => 'Cela dépend de l’utilisation du MVC',
        'choice_4' => 'test',
        'answer' => 'Oui',
        'language_id' => 4,
        ]);
        DB::table('question')->insert([
        'id' => 3,
        'level' => '3',
        'question' => 'Quelle est la différence entre «==» et «===»?',
        'choice_1' => '== (affectation) et === (identique en valeur et en type)',
        'choice_2' => '== (égal en valeur) et === (identique en valeur et en type)',
        'choice_3' => '== (identique en valeur et en type) et === (égal en valeur)',
        'choice_4' => '== (affectation) et === (égal en valeur)',
        'answer' => '== (égal en valeur) et === (identique en valeur et en type)',
        'language_id' => 4,
        ]);
        DB::table('question')->insert([
        'id' => 4,
        'level' => '4',
        'question' => 'Comment trouvez-vous la longueur d\'un tableau?',
        'choice_1' => "strlen('array')",
        'choice_2' => 'console.log(array.length);',
        'choice_3' => 'echo count($array);',
        'choice_4' => 'test',
        'answer' => 'echo count($array);',
        'language_id' => 4,
        ]);
        DB::table('question')->insert([
        'id' => 5,
        'level' => '5',
        'question' => 'Combien d\'objets pouvez-vous créer en PHP?',
        'choice_1' => '0',
        'choice_2' => '1',
        'choice_3' => '5',
        'choice_4' => 'illimité',
        'answer' => 'illimité',
        'language_id' => 4,
        ]);

        DB::table('question')->insert([
        'id' => 6,
        'level' => '1',
        'question' => 'Que renvoie 10 % 5 ?',
        'choice_1' => '0',
        'choice_2' => '0.2',
        'choice_3' => '0.5',
        'choice_4' => '2',
        'answer' => '0',
        'language_id' => 1,
        ]);
        DB::table('question')->insert([
        'id' => 7,
        'level' => '2',
        'question' => 'Si elle n\'est pas précisée, quelle est la portée d\'une variable d\'instance dans une classe?',
        'choice_1' => 'privée',
        'choice_2' => 'locale',
        'choice_3' => 'publique',
        'choice_4' => 'pas acceptée par le compilateur',
        'answer' => 'publique',
        'language_id' => 1,
        ]);
        DB::table('question')->insert([
        'id' => 8,
        'level' => '3',
        'question' => 'Comment déclare-t-on la méthode d’entrée du programme Java?',
        'choice_1' => 'public main(String args): void',
        'choice_2' => 'function main (String args): void',
        'choice_3' => 'public static void main(String args[])',
        'choice_4' => 'private void main(String args[])',
        'answer' => 'public static void main(String args[])',
        'language_id' => 1,
        ]);
        DB::table('question')->insert([
        'id' => 9,
        'level' => '4',
        'question' => 'Est-ce que Chaque bloc try doit être suivi d\'un bloc catch?',
        'choice_1' => 'Vrai',
        'choice_2' => 'Faux',
        'choice_3' => 'test',
        'choice_4' => 'test',
        'answer' => 'Faux',
        'language_id' => 1,
        ]);
        DB::table('question')->insert([
        'id' => 10,
        'level' => '5',
        'question' => ' Combien d\'objets sont créés dans le code suivant : String s = new String("Hello");',
        'choice_1' => '0',
        'choice_2' => '1',
        'choice_3' => '2',
        'choice_4' => '3',
        'answer' => '2',
        'language_id' => 1,
        ]);

        DB::table('question')->insert([
        'id' => 11,
        'level' => '1',
        'question' => 'Comment commenter du code Python ?',
        'choice_1' => 'En utilisant ‘//’ devant le commentaire à écrire',
        'choice_2' => 'En utilisant ‘#‘ devant le commentaire à écrire',
        'choice_3' => 'En utilisant ‘<!- -‘ devant le commentaire à écrire',
        'choice_4' => 'En utilisant ‘%‘ devant le commentaire à écrire',
        'answer' => 'En utilisant ‘#‘ devant le commentaire à écrire',
        'language_id' => 3,
        ]);
        DB::table('question')->insert([
        'id' => 12,
        'level' => '2',
        'question' => 'Comment écrire dans la console ?',
        'choice_1' => 'echo(‘Hello World’)',
        'choice_2' => 'printf(‘Hello World’)',
        'choice_3' => 'println(‘Hello World’)',
        'choice_4' => 'print(’Hello World’)',
        'answer' => 'print(’Hello World’)',
        'language_id' => 3,
        ]);
        DB::table('question')->insert([
        'id' => 13,
        'level' => '3',
        'question' => "Que permet de faire l'opérateur `%` (le modulo) ?",
        'choice_1' => 'De concaténer des chaines de caractères',
        'choice_2' => 'D’avoir le résultat d’une division entière',
        'choice_3' => 'De calculer le reste de la division entière',
        'choice_4' => 'D’afficher le nombre de chiffres après la virgule d’un chiffre',
        'answer' => 'De calculer le reste de la division entière',
        'language_id' => 3,
        ]);
        DB::table('question')->insert([
        'id' => 14,
        'level' => '4',
        'question' => "Comment concaténer des chaînes de caractères ?",
        'choice_1' => "formateurs = 'Louis' && 'Marie'",
        'choice_2' => "formateurs = 'Louis' + 'Marie'",
        'choice_3' => "formateurs = 'Louis' . 'Marie'",
        'choice_4' => "formateurs = 'Louis' // 'Marie'",
        'answer' => "formateurs = 'Louis' + 'Marie'",
        'language_id' => 3,
        ]);
        DB::table('question')->insert([
        'id' => 15,
        'level' => '5',
        'question' => "Quelle est la différence entre une boucle 'for' et 'while'?",
        'choice_1' => "Le 'for' s'utilise pour un nombre connu d'itérations, le 'while' avec une condition d'arrêt particulière",
        'choice_2' => "Le 'for' s'utilise seulement sur des listes, le 'while' pas forcément",
        'choice_3' => "Le 'for' ne peut pas boucler sur des listes, le 'while' si",
        'choice_4' => "Le 'for' ne peut pas s'utiliser dans une fonction, le 'while' si",
        'answer' => "Le 'for' s'utilise pour un nombre connu d'itérations, le 'while' avec une condition d'arrêt particulière",
        'language_id' => 3,
        ]);

        DB::table('question')->insert([
        'id' => 16,
        'level' => '1',
        'question' => "Quel symbole termine toujours une instruction?",
        'choice_1' => ".",
        'choice_2' => ",",
        'choice_3' => ";",
        'choice_4' => "}",
        'answer' => ";",
        'language_id' => 2,
        ]);
        DB::table('question')->insert([
        'id' => 17,
        'level' => '2',
        'question' => "Quel symbole permet de faire un retour à la ligne à l’écran?",
        'choice_1' => "\a",
        'choice_2' => "\\t",
        'choice_3' => "\\r",
        'choice_4' => "\\n",
        'answer' => "\\n",
        'language_id' => 2,
        ]);
        DB::table('question')->insert([
        'id' => 18,
        'level' => '3',
        'question' => "La programmation en C permet la création de quel type de fichiers?",
        'choice_1' => "Des images (*.jpg, *.png, *.bpm…)",
        'choice_2' => "Des sources (*.c)",
        'choice_3' => "Des exécutables (*.exe sous Windows)",
        'choice_4' => "Des fichiers textes (*.txt)",
        'answer' => "Des exécutables (*.exe sous Windows)",
        'language_id' => 2,
        ]);
        DB::table('question')->insert([
        'id' => 19,
        'level' => '4',
        'question' => "Quel type n'existe pas en langage C 89?",
        'choice_1' => "booléen",
        'choice_2' => "caractère",
        'choice_3' => "entier",
        'choice_4' => "virgule flottante",
        'answer' => "booléen",
        'language_id' => 2,
        ]);
        DB::table('question')->insert([
        'id' => 20,
        'level' => '5',
        'question' => "Par quoi est définie une fonction en langage C 89?",
        'choice_1' => "son nom seul",
        'choice_2' => "son nom et le type de valeur retournée",
        'choice_3' => "son nom et son nombre d’arguments",
        'choice_4' => "son nom, le type de retour, le nombre et les types d’arguments formels de la fonction",
        'answer' => "son nom, le type de retour, le nombre et les types d’arguments formels de la fonction",
        'language_id' => 2,
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
        DB::table('advancement')->insert([
            'id' => 3,
            'points' => 0,
            'language_id' => 1,
            'user_id' => 2,
        ]);
    }
}
