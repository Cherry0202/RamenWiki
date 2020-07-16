<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    protected $table = 'user_history';

    public function register($register){
        $history = new UserHistory();
        $history->user_id=$register->user_id;
        $history->store_id=$register->store_id;
        $check = UserHistory::where('user_id', $history->user_id)->where('store_id', $history->store_id)->first();
        if($check){
            $result = false;
        }else{
            $result = $history->save();
            $wiki = Wiki::all()->where('store_id',$register->store_id)->first();
            $user_history = UserHistory::all()->where('store_id',$register->store_id)->count();
            $wiki->store_user_sum = $user_history;
            $wiki->save();
        }
        return($result);
    }
}