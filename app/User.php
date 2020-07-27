<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\UserHistory;
use App\Store;

class User extends Authenticatable
{

    protected $table = 'users';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function recommend($user_id)
    {
        $store = new Store;
        $wiki = new Wiki;
        $userHistory = new UserHistory();
        $recommendList = [];
        $resultChart = new ResultChart;
        $wentStoreList = $userHistory->select('store_id')->where('user_id', $user_id)->get();
        foreach ($store->whereNotIn('id', $wentStoreList)->get() as $store) {
            $wikiData = $wiki::where('store_id', $store->id)->get()->first();
            if ($wikiData == null) {
                $resultChartData = null;
            } else {
                $resultChartData = $resultChart::where('wiki_id', $wikiData->id)->get()->first();
            }
            $recommendList[] = [
                'store'=>$store,
                'wiki'=>$wikiData,
                'resultChart'=>$resultChartData
            ];
        }
        return json_encode($recommendList);
    }
}
