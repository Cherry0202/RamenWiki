<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;

class Search extends Controller
{
    public function index(){
        $search_info = Search::all();
        return $search_info;
    }
}
