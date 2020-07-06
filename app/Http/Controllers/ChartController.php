<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chart_log;

class ChartController extends Controller
{
    //
    public function register(){
        $request = new Request();
        $request->user_id = 1;
        $request->wiki_id = 1;
        $request->price = 1;
        $request->amount = 1;
        $request->kotteri = 1;
        $request->soup = 1;
        $request->topping = 1;
        $request->nodle_type = 1;
        $json = json_encode($request);

        $register = json_decode($json);
        $chart_log = new Chart_log();
        $chart_log->chartLogRegister($register);

    }
}
