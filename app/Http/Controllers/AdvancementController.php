<?php

namespace App\Http\Controllers;

use App\Models\Advancement;
use Illuminate\Http\Request;

class AdvancementController extends Controller
{
    //Mapping all advancements
    public function index($id) {
        $advancement = Advancement::find($id);
        //return view("welcome", ["advancement" => $advancement]);
    }
}
