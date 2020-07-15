<?php

namespace App;

use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Http;

use function GuzzleHttp\Promise\all;

class Wiki extends Model
{
    //
    protected $table = 'wiki';
}
