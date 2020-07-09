<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    public function login(){
        //$user_info = json_encode(User::all());
        // return $user_info;
        $user = User::select('name')->get();
        return $user;
    }

    public function register(){
        $name = User::name();
        $password = User::password();
        
    }
}
