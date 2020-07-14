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
        $wiki = new Wiki();
        $wiki_info = $wiki->wiki_select($request->store_id);
        if($wiki_info){
            return response()->json(['response'=>$wiki_info],Response::HTTP_OK);
        }else {
            return response()->json(['message'=>'該当なし'],Response::HTTP_NOT_FOUND);
        }
    }

    // wikiの登録及びUPDATE
    public function register(Request $request){
        $register = $request;
        $wiki = new Wiki();
        $flag_wiki = $wiki->wiki_register($register);
        if($flag_wiki){
            $flag = response()->json(['message'=>'ok'],Response::HTTP_CREATED);
        }else {
            $flag = response()->json(['message'=>'error'],Response::HTTP_INTERNAL_SERVER_ERROR);
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
        $register = $request;
        $wiki = new Wiki();
        if($wiki->wiki_delete($register)){
            return response()->json(['message'=>'ok'],Response::HTTP_OK);
        }else {
            return response()->json(['message'=>'error'],Response::HTTP_NO_CONTENT);
        }
    }

}
