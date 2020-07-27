<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoreController extends Controller
{
    public function index(){
        $store_info = json_encode(Store::all());
        return $store_info;
    }

    public function storeAll(Request $request)
    {
        $store = new Store;
        $storeAll = $store->storeAll();
        return $storeAll;
    }
}
