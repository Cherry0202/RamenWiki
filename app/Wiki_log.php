<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wiki_log extends Model
{
    //
    protected $table = 'wiki_log';

    // wikiのログを生成する関数
    public function wiki_log_register($wiki_id, $user_id)
    {
        $wiki_log = new Wiki_log();
        $wiki_log->wiki_id = $wiki_id;
        $wiki_log->user_id = $user_id;
        $wiki_log->save();
    }
}
