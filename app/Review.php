<?php

namespace App;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'review';

    public function user_select($select){
        $values = array();
        $reviews = Review::all()->where('user_id',$select->user_id);
        foreach ($reviews as $review) {
            $review_flag = $review->chart;
            $review_flag->text = $review->text;
            $values[] = $review_flag;
        }
        if(!$values){
            $values[] = 'miss';
        }
        return $values;
    }

    public function wiki_select($select){
        $reviews = Review::all();
        $values = array();
        foreach ($reviews as $review) {
            $review_flag = $review->chart;
            if ($review_flag->wiki_id == $select->wiki_id) {
                $review_flag->text = $review->text;
                $values[] = $review_flag;
            }
        }

        if(!$values){
            $values[] = ['message'=>'miss'];
        }
        return $values;
    }

    public function register($register){

        $review = new Review();
        $review_flag = Review::all()->where('chart_log_id',$register->chart_log_id)->where('user_id',$register->user_id)->first();
        if($review_flag){
            $review_flag->chart_log_id = $register->chart_log_id;
            $review_flag->text = $register->text;
            $review_flag->user_id = $register->user_id;
            $review_flag->save();
            return $review_flag;
        }else {
            $review->chart_log_id = $register->chart_log_id;
            $review->text = $register->text;
            $review->user_id = $register->user_id;
            $review->save();
            return $review;
        }
    }

    public function review_delete($delete){
        $review = Review::all()->where('id',$delete->id)->first();
        if($review){
            $chart_log_delete = $review->chart;
            $result_chart = new Result_chart();
            $wiki_id = $chart_log_delete->wiki_id;
            $review->delete();
            $chart_log_delete->delete();
            $flag = Chart_log::all()->where('wiki_id',$wiki_id)->count();
            if($flag){
                $result_chart->chart_log_result_register($wiki_id);
            }else {
                $result_chart->chart_log_delete($wiki_id);
            }
            return true;
        }else {
            return false;
        }

    }

    public function chart()
    {
        return  $this->belongsTo('App\Chart_log', 'chart_log_id');
    }
}
