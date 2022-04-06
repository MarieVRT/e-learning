<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Question;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;

class LanguageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index($id, $level){
        $language = Language::find($id);
        $question = Question::all();
        $level += 1;
        //$question = Question::find($id);
        //dump($question);
        return view("language.index", ["language" => $language, "question" => $question, "level" => $level]);
    }


    public static function checkAnswer($id, $answer) {
        if($id == $answer) {
            $question = Question::all();
            return view("_answer", ["question" => $question]);
        } else {
            return "trest";
        }
    }

    public function store()
    {
        $test = Question::all();
        $a = $test[$_GET['answer']-1]['answer'];

        $b = $_GET['question'];
        if (isset($_GET['question'])) {
            $note = 0;

            if ($a === $b) {
                $note += 20;
            }

            switch ($note) {
                case 0:
                    return redirect('/language/3/4');
                default:
                    return redirect('home');
            }

        }
    }

}
