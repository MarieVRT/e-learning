<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //Mapping all answers
    public function index($id) {
        $answer = Answer::find($id);
        //return view("welcome", ["answer" => $answer]);
    }
}
