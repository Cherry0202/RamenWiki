<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stores;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $stores = new Stores;
        $storesResult = $stores->search($request->keyword);
        return $storesResult;
    }
}
