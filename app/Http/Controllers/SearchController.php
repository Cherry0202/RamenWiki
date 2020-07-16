<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $store = new Store;
        $storeResult = $store->search($request->keyword);
        return $storeResult;
    }
}
