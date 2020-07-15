<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    //
    protected $table = 'wiki';

    public function resultChart()
    {
        // return $this->hasOne('App\ResultChart', 'foreign_key');
        // return $this->hasOne('App\Phone', 'foreign_key');
    }
}
