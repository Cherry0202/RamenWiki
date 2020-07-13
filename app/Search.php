<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $table = 'wiki';

    public function resultChart()
    {
        return $this->hasOne('App\ResultChart', 'foreign_key');
        // return $this->hasOne('App\Phone', 'foreign_key');
    }

    // // use SoftDeletes;
    // protected $dates = ['deleted_at'];


    // protected $fillable = [
    //     'id', 'store_id', 'text', 'store_user_sum',
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'created_at', 'updated_at',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    // public function storeSelect()
    // {
    //     return  $this->belongsTo('App\Store', 'store_id');
    // }

    // public function wikiSelect($store_id)
    // {
    //     $wiki_info = Wiki::all()->where('store_id', $store_id)->first();
    //     return $wiki_info;
    // }

    // public function wikiRegister($register)
    // {
    //     // 削除済みか判断するために復元
    //     Wiki::onlyTrashed()->where('store_id', $register->store_id)->restore();
    //     // 行があるかの確認
    //     $wiki_info = Wiki::all()->where('store_id', $register->store_id)->first();
    //     if ($wiki_info) {
    //         // あった場合はtextの更新
    //         $wiki_info->text = $register->text;
    //         $wiki_info->save();
    //     } else {
    //         // ない場合はそのまま登録
    //         $wiki = new Wiki();
    //         $wiki->store_id = $register->store_id;
    //         $wiki->text = $register->text;
    //         $wiki->store_user_sum = $register->store_user_sum;
    //         $wiki->save();
    //     }
    // }

    // public function wikiDelete($register)
    // {
    //     // テーブルのあるか確認
    //     $wiki = new Wiki();
    //     $wiki_info = $wiki->wikiSelect($register->store_id);
    //     if ($wiki_info) {
    //         // 更新
    //         $wiki_log = new Wiki_log();
    //         $wiki_log->wikiLogRegister($wiki_info->id, $register->user_id);

    //         // あった場合は削除
    //         $wiki_info->delete();
    //     }
    // }
}
