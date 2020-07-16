<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WikiLog extends Model
{
    //
    protected $table = 'wiki_log';

    // wikiのログを生成する関数
    public function wiki_log_register($wiki_id, $user_id)
    {
        $wiki_log = new WikiLog();
        $wiki_log->wiki_id = $wiki_id;
        $wiki_log->user_id = $user_id;
        $wiki_log->save();
    }
}
