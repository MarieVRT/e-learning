<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //Mapping all questions
    public function show($id) {
        $question = Question::find($id);
        return view("language.index", ["question" => $question]);
    }
}

