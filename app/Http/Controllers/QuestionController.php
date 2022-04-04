<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //Mapping all questions
    public function index($id) {
        $question = Question::find($id);
        //return view("welcome", ["question" => $question]);
    }
}
