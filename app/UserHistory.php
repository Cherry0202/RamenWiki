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
        }
        return($result);
    }
}