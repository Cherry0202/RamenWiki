<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chart_log;
use App\Result_chart;
use App\Review;

class ReviewController extends Controller
{

    // review Wiki毎に取得
    public function review_user_select(){
        $request = new Request();
        $request->user_id = 1;
        $json = json_encode($request);
        $register = json_decode($json);

        $review = new Review();
        return response()->json(['data'=>$review->user_select($register)],200);
    }

    public function review_wiki_select(){
        $request = new Request();
        $request->wiki_id = 3;
        $json = json_encode($request);
        $register = json_decode($json);

        $review = new Review();
        return response()->json(['data'=>$review->wiki_select($register)],200);
    }

    //
    public function register(){
        $request = new Request();
        $request->user_id = 1;
        $request->wiki_id = 1;
        $request->price = 4;
        $request->amount = 5;
        $request->kotteri = 5;
        $request->soup = 5;
        $request->topping = 5;
        $request->noodle_type = 5;
        $request->text = 'aaa';
        $json = json_encode($request);

        $register = json_decode($json);
        $chart_log = new Chart_log();
        $chart_log_id = $chart_log->chart_log_register($register);

        $result_chart = new Result_chart();
        $result_chart->chart_log_result_register($register->wiki_id);
        $register->chart_log_id = $chart_log_id;

        $review = new Review();
        $review->register($register);

        return response()->json(['message'=>'ok'],200);

    }

    public function delete(){
        $request = new Request();
        $request->id = 2;
        $json = json_encode($request);

        $delete = json_decode($json);

        $review = new Review();
        if($review->review_delete($delete)){
            return response()->json(['message'=>'ok'],200);
        }else {
            return response()->json(['message'=>'miss'],404);
        }

    }
}
