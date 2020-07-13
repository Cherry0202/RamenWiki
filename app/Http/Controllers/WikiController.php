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
    public function select(Request $request){
        // 仮定のリクエスト作成及びjsonのデコード
        $store_id = json_decode($request);
        $wiki = new Wiki();
        $wiki_info = $wiki->wiki_select($store_id->store_id);
        if($wiki_info){
            return response()->json(['data'=>$wiki_info],Response::HTTP_OK);
        }else {
            return response()->json(['message'=>'該当なし'],Response::HTTP_NOT_FOUND);
        }
    }

    // wikiの登録及びUPDATE
    public function register(Request $request){
        $register = json_decode($request);
        $wiki = new Wiki();
        $flag_wiki = $wiki->wiki_register($register);
        if($flag_wiki){
            $flag = response()->json(['message'=>'登録完了'],Response::HTTP_CREATED);
        }else {
            $flag = response()->json(['message'=>'登録失敗'],Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // ログの更新
        if($flag->status() == Response::HTTP_CREATED){
            $wiki_log = new Wiki_log();
            $wiki_log->wiki_log_register($flag_wiki, $register->user_id);
        }

        return $flag;

    }

    // Wikiの削除
    public function delete(Request $request){
        $register = json_decode($request);
        $wiki = new Wiki();
        if($wiki->wiki_delete($register)){
            return response()->json(['message'=>'削除完了'],Response::HTTP_OK);
        }else {
            return response()->json(['message'=>'削除失敗'],Response::HTTP_NO_CONTENT);
        }
    }

}
