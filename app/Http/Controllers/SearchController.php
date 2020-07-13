<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $keyword = json_decode($request);
        $flights = search::where('id', 1)->get();
        // $searchResult = Search::all();
        return $flights;
    }
}
