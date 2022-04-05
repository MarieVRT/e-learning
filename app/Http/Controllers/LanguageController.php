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
    public function index($id){
        $language = Language::find($id);
        return view("language.index", ["language" => $language]);
    }



}
