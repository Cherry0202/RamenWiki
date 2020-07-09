<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chart_log;
use App\Result_chart;
use App\Review;

class ReviewController extends Controller
{

    // review Wiki毎に取得
    public function review_user_select(Request $request){
        $register = json_decode($request);
        $review = new Review();
        return response()->json(['data'=>$review->user_select($register)],200);
    }

    public function review_wiki_select(Request $request){
        $register = json_decode($request);
        $review = new Review();
        return response()->json(['data'=>$review->wiki_select($register)],200);
    }

    //
    public function register(Request $request){
        $register = json_decode($request);
        $chart_log = new Chart_log();
        $chart_log_id = $chart_log->chart_log_register($register);

        $result_chart = new Result_chart();
        $result_chart->chart_log_result_register($register->wiki_id);
        $register->chart_log_id = $chart_log_id;

        $review = new Review();
        $review->register($register);

        return response()->json(['message'=>'ok'],200);

    }

    public function delete(Request $request){
        $delete = json_decode($request);

        $review = new Review();
        if($review->review_delete($delete)){
            return response()->json(['message'=>'ok'],200);
        }else {
            return response()->json(['message'=>'miss'],404);
        }

    }
}
