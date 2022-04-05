<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Mapping all users
    public function index() {
        $user = User::all();
        //return view("welcome", ["user" => $user]);
    }
}
