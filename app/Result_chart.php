<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_chart extends Model
{
    //
    protected $table = 'result_chart';

    public function chart_log_result($wiki_id){
        $result_chart = Result_chart::all()->where('wiki_id',$wiki_id)->first();
        return $result_chart;
    }

    public function chart_log_result_select($wiki_id){
        $chart_log = Chart_log::where('wiki_id',$wiki_id);
        $result_chart = new Result_chart();
        $cnt = $chart_log->count();
        $result_chart->sum_people_price = $chart_log->count();
        $result_chart->avg_price = $chart_log->sum('price') / $cnt;
        $result_chart->avg_amount = $chart_log->sum('amount') / $cnt;
        $result_chart->avg_kotteri = $chart_log->sum('kotteri') / $cnt;
        $result_chart->avg_soup = $chart_log->sum('soup') / $cnt;
        $result_chart->avg_topping = $chart_log->sum('topping') / $cnt;
        $result_chart->avg_noodle_type = $chart_log->sum('noodle_type') / $cnt;
        $result_chart->wiki_id = $wiki_id;
        return $result_chart;
    }

    public function chart_log_result_register($wiki_id){
        $chart = new Result_chart();
        $result_flag = Result_chart::all()->where('wiki_id',$wiki_id)->first();
        if($result_flag){
            $result_chart = $chart->chart_log_result_select($wiki_id);
            $result_flag->avg_price = $result_chart->avg_price;
            $result_flag->avg_amount = $result_chart->avg_amount;
            $result_flag->avg_kotteri = $result_chart->avg_kotteri;
            $result_flag->avg_soup = $result_chart->avg_soup;
            $result_flag->avg_topping = $result_chart->avg_topping;
            $result_flag->avg_noodle_type = $result_chart->avg_noodle_type;
            $result_flag->sum_people_price = $result_chart->sum_people_price;
            $result_flag->save();
            return $result_flag->id;
        }else {
            $result_chart = $chart->chart_log_result_select($wiki_id);
            $result_chart->save();
            return $result_chart->id;
        }
    }

    public function chart_log_delete($wiki_id){
        $result_chart = Result_chart::where('wiki_id',$wiki_id);
        $result_chart->delete();
    }
}
