<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wiki;
use App\Wiki_log;
use App\Chart_log;
use Illuminate\Http\Response;

class WikiController extends Controller
{

    // 店舗ごとのWiki取得
    public function select(){
        // 仮定のリクエスト作成及びjsonのデコード
        $request = new Request();
        $request->store_id = 1;
        $store_info = json_encode($request);
        $store_id = json_decode($store_info);

        $wiki = new Wiki();
        return $wiki->wiki_select($store_id->store_id);
    }

    // wikiの登録及びUPDATE
    public function register(){
        // 仮定のRequest作成及びjsonのデコード
        $request = new Request();
        $request->user_id = 1;
        $request->store_id = 1;
        $request->text = 'ooo';
        $request->store_user_sum = 1;
        $json = json_encode($request);
        $register = json_decode($json);

        
        $wiki = new Wiki();
        if($wiki->wiki_register($register)){
            $flag = response()->json([],200);
        }else {
            $flag = response()->json([],404);
        }

        // ログの更新
        if($flag->status() == 200){
            $wiki_id = Wiki::all()->where('store_id', $register->store_id)->first()->id;
            $wiki_log = new Wiki_log();
            $wiki_log->wiki_log_register($wiki_id, $register->user_id);
            return $flag->status();
        }else {
            return $flag->status();
        }

    }

    // Wikiの削除
    public function delete(){
        // 仮定のRequest作成及びjsonのデコード
        $request = new Request();
        $request->user_id = 1;
        $request->store_id = 1;
        $json = json_encode($request);
        $register = json_decode($json);

        $wiki = new Wiki();
        if($wiki->wiki_delete($register)){
            return response()->json(['message'=>'aaa'],200);
        }else {
            return response()->json(['message'=>'bbb'],404);
        }
    }

}
