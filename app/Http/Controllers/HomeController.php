<?php

namespace App\Http\Controllers;

use App\Models\Advancement;
use App\Models\Language;
use Illuminate\Foundation\Auth\User;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //Mapping all languages
    public function index(){
        $language = Language::orderBy('level', 'ASC')->get();
        return view("home.index", ["language" => $language]);
    }

    public function profile(){
        $user = User::all();
        $advancement = Advancement::all();
        $language = Language::all();
        return view("profile.index", ["user" => $user, "advancement" => $advancement, "language" => $language]);
    }
}
