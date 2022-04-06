<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Question;
use Illuminate\Http\Request;

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
}
