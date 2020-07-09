<?php

namespace App;

use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Http;

class Wiki extends Model
{
    //
    protected $table = 'wiki';

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'id', 'store_id', 'text', 'store_user_sum',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function storeSelect()
    {
        return  $this->belongsTo('App\Store', 'store_id');
    }

    public function wiki_select($store_id)
    {
        $wiki = Wiki::all()->where('store_id', $store_id)->first();
        return $wiki;
    }

    public function wiki_register($register)
    {
        // 削除済みか判断するために復元
        Wiki::onlyTrashed()->where('store_id', $register->store_id)->restore();
        // 行があるかの確認
        $wiki_flag = Wiki::all()->where('store_id', $register->store_id)->first();
        if($wiki_flag){
            // あった場合はtextの更新
            $wiki_flag->text = $register->text;
            $flag = $wiki_flag->save();
            return $flag;
        }else {
            // ない場合はそのまま登録
            $wiki = new Wiki();
            $wiki->store_id = $register->store_id;
            $wiki->text = $register->text;
            $wiki->store_user_sum = $register->store_user_sum;
            $flag = $wiki->save();
            return $flag;
        }

        return false;
    }

    public function wiki_delete($register)
    {
        // テーブルのあるか確認
        $wiki = new Wiki();
        $wiki_flag = $wiki->wiki_select($register->store_id);
        if($wiki_flag){
            // 更新
            $wiki_log = new Wiki_log();
            $wiki_log->wiki_log_register($wiki_flag->id, $register->user_id);

            // あった場合は削除
            $wiki_flag->delete();
            return true;

        }else {
            return false;
        }
    }
}
