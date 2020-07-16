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
}
