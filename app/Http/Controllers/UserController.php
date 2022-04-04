<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Mapping all users
    public function index() {
        $user = Users::all();
        //return view("welcome", ["user" => $user]);
    }
}
