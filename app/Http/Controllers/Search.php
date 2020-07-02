<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;

class Search extends Controller
{
    public function index(){
        $search_info = wiki::all()+store::all()+result_chart::all();
        return $search_info;
    }
}
