<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Question;
use App\Models\User;
use App\Models\Advancement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user()->id;

        $level += 1;

        $advancement = DB::table('advancement')
            ->where('user_id', '=', $user)
            ->where('language_id', '=', $id)
            ->get();

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
                $advancement[0]->points += 1;
                DB::table('advancement')
                    ->where('user_id', '=', $user)
                    ->where('language_id', '=', $id)
                    ->update([
                    "points" => $advancement[0]->points
                ]);
                if ($level === 6) {
                    return view("language.result", ["language" => $language, "advancement" => $advancement[0]->points]);
                }
                return view("language.index", ["language" => $language, "question" => $question, "level" => $level]);
            } else {
                if ($level === 6) {
                    return view("language.result", ["language" => $language, "advancement" => $advancement[0]->points]);
                }
                return view("language.index", ["language" => $language, "question" => $question, "level" => $level]);
            }
        }
        return view("language.index", ["language" => $language, "question" => $question, "level" => $level]);
    }

    public function result($id){
        $language = Language::find($id);
        $user = Auth::user()->id;

        $advancement = DB::table('advancement')
            ->where('user_id', '=', $user)
            ->where('language_id', '=', $id)
            ->get();

        return view("language.result", ["language" => $language, "advancement" => $advancement[0]->points]);
    }

}
