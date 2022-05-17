<?php

namespace App\Http\Controllers;

use App\Charts\SampleChart;
use App\Models\Advancement;
use App\Models\Language;

use Illuminate\Foundation\Auth\User;
use App\Models\Question;
use Illuminate\Support\Facades\DB;


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

    public function profile(){
        $user = User::all();
        $advancement = Advancement::all();
        $language = Language::all();
        return view("profile.index", ["user" => $user, "advancement" => $advancement, "language" => $language]);
    }


    public function stats($id){
        //Créer requete pour faire matcher l'id du user avec la table advancement (récup toutes les lignes)
        $advancement = DB::table('advancement')
            ->where('user_id', '=', $id)
            ->get();

        //Liste de tous les langages d'un user WORK POUR LA PARTIE ADVANCEMENT
        $language_user = DB::table('advancement')
            ->join('language', 'advancement.language_id', '=', 'language.id')
            ->select(DB::raw('name, user_id, points'))
            ->where('user_id', '=', $id)
            ->get();

        //Stats avancements globaux par rapport à un langage
        $advancement_all = DB::table('advancement')
            ->select(DB::raw('AVG(points) as pts,name, language_id'))
            ->join('language', 'advancement.language_id', '=', 'language.id')
            ->groupBy('language_id')
            ->get();

        return view("profile.stats", ["advancement" => $advancement, "language_user" => $language_user, "advancement_all" => $advancement_all]);
    }
}
