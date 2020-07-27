<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartLog extends Model
{
    //
    protected $table = 'chart_log';

    public function chart_log_register($register)
    {
        $chartlogflag = ChartLog::all()->where('user_id',$register->user_id)->where('wiki_id',$register->wiki_id)->first();

        if(!$chartlogflag){
            $chart_log = new ChartLog();
            $chart_log->user_id = $register->user_id;
            $chart_log->wiki_id = $register->wiki_id;
            $chart_log->price = $register->price;
            $chart_log->amount = $register->amount;
            $chart_log->kotteri = $register->kotteri;
            $chart_log->soup = $register->soup;
            $chart_log->topping = $register->topping;
            $chart_log->noodle_type = $register->noodle_type;
            $chart_log->save();
            return $chart_log->id;
        }else {
            $chartlogflag->price = $register->price;
            $chartlogflag->amount = $register->amount;
            $chartlogflag->kotteri = $register->kotteri;
            $chartlogflag->soup = $register->soup;
            $chartlogflag->topping = $register->topping;
            $chartlogflag->noodle_type = $register->noodle_type;
            $chartlogflag->save();
            return $chartlogflag->id;
        }
    }
}
