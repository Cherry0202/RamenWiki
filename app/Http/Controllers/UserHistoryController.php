<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserHistory;

class UserHistoryController extends Controller
{
    public function history(Request $request){
        $register = json_decode($request);
        $history = new UserHistory();
        if($history->register($register)){
            return("ok");
        }else{
            return("no");
        }
    }
}