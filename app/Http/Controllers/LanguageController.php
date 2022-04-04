<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //Mapping all languages
    public function index() {
        $language = Language::all();
        //return view("welcome", ["language" => $language]);
    }
}
