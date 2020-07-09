<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_chart extends Model
{
    //
    protected $table = 'result_chart';

    public function chart_log_result_select($wiki_id){
        $chart_log = Chart_log::where('wiki_id',$wiki_id);
        $resultChart = new Result_chart();
        $cnt = $chart_log->count();
        $resultChart->sum_people_price = $chart_log->count();
        $resultChart->avg_price = $chart_log->sum('price') / $cnt;
        $resultChart->avg_amount = $chart_log->sum('amount') / $cnt;
        $resultChart->avg_kotteri = $chart_log->sum('kotteri') / $cnt;
        $resultChart->avg_soup = $chart_log->sum('soup') / $cnt;
        $resultChart->avg_topping = $chart_log->sum('topping') / $cnt;
        $resultChart->avg_noodle_type = $chart_log->sum('noodle_type') / $cnt;
        $resultChart->wiki_id = $wiki_id;
        return $resultChart;
    }

    public function chart_log_result_register($wiki_id){
        $chart = new Result_chart();
        $resultFlag = Result_chart::all()->where('wiki_id',$wiki_id)->first();
        if($resultFlag){
            $resultchart = $chart->chart_log_result_select($wiki_id);
            $resultFlag->avg_price = $resultchart->avg_price;
            $resultFlag->avg_amount = $resultchart->avg_amount;
            $resultFlag->avg_kotteri = $resultchart->avg_kotteri;
            $resultFlag->avg_soup = $resultchart->avg_soup;
            $resultFlag->avg_topping = $resultchart->avg_topping;
            $resultFlag->avg_noodle_type = $resultchart->avg_noodle_type;
            $resultFlag->sum_people_price = $resultchart->sum_people_price;
            $resultFlag->save();
            return $resultFlag->id;
        }else {
            $resultchart = $chart->chart_log_result_select($wiki_id);
            $resultchart->save();
            return $resultchart->id;
        }
    }
}
