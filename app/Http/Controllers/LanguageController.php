<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Ramsey\Uuid\v1;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id, $level)
    {
        $language = Language::find($id);
        $question = Question::all();
        $level += 1;

        $answer = DB::table('question')
            ->where('level', '=', $level-1)
            ->where('language_id', '=', $id)
            ->get();


        if (isset($answer[0])){
            $getDbAnswer = $answer[0]->answer;
            $getUserAnswer = 0;
            if($_GET !== []){
                $getUserAnswer = $_GET['question'];
            }
            if($getDbAnswer === $getUserAnswer){
                return view("language.index", ["language" => $language, "question" => $question, "level" => $level]);
            } else {
                return redirect('home');
            }
        }
        return view("language.index", ["language" => $language, "question" => $question, "level" => $level]);
    }
}
