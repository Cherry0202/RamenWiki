<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChartLog;
use App\ResultChart;
use App\Review;
use Illuminate\Http\Response;

class ReviewController extends Controller
{

    // review Wiki毎に取得
    public function review_user_select(Request $request){
        $register = $request;
        $review = new Review();
        $review_user = $review->user_select($register);
        if($review_user){
            return response()->json(['response'=>$review_user],Response::HTTP_OK);
        }else {
            return response()->json(['message'=>'該当なし',Response::HTTP_NO_CONTENT]);
        }
    }

    public function review_wiki_select(Request $request){
        $register = $request;
        $review = new Review();
        $review_wiki = $review->wiki_select($register);
        if($review_wiki){
            return response()->json(['response'=>$review_wiki],Response::HTTP_OK);
        }else {
            return response()->json(['message'=>'error',Response::HTTP_NO_CONTENT]);
        }
    }

    //
    public function register(Request $request){
        $register = $request;
        $chart_log = new ChartLog();
        $chart_log_id = $chart_log->chart_log_register($register);
        if($chart_log_id){
            $result_chart = new ResultChart();
            $result_chart->chart_log_result_register($register->wiki_id);
            $register->chart_log_id = $chart_log_id;

            $review = new Review();
            $review->register($register);

            return response()->json(['message'=>'ok'],Response::HTTP_CREATED);          
        }else {
            return response()->json(['message'=>'error',Response::HTTP_INTERNAL_SERVER_ERROR]);
        }
    }

    public function delete(Request $request){
        $delete = $request;

        $review = new Review();
        if($review->review_delete($delete)){
            return response()->json(['message'=>'ok'],Response::HTTP_OK);
        }else {
            return response()->json(['message'=>'error'],Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
