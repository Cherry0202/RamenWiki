<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\UserHistory;


class UserHistoryController extends Controller
{
    public function history(Request $request){
        $register = $request;
        $history = new UserHistory();
        if($history->register($register)){
            return response()->json(['response'=>'OK'],Response::HTTP_OK);
        }else{
            return response()->json(['response'=>'NO'],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}