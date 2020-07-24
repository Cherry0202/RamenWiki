<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    public function login(){
        $user = User::select('name')->get();
        return $user;
    }

    public function register(){
        $name = User::name();
        $password = User::password();
        
    }

    public function recommend(Request $request) {
        $user = new User;
        $recommendList = $user->recommend($request->id);
        return $recommendList;
    }
}
