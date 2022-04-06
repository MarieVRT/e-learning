<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Question;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //Mapping all languages
    public function index(){
        $language = Language::orderBy('level', 'ASC')->get();
        $question = Question::orderBy('level', 'ASC')->get();
        return view("home.index", ["language" => $language, "question" => $question]);
    }
}
