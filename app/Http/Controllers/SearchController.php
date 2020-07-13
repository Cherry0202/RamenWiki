<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;

class SearchController extends Controller
{
    public function search()
    {
        return Search::all();
    }























    
    // // 店舗ごとのWiki取得
    // public function select(){
    //     // 仮定のリクエスト作成及びjsonのデコード
    //     $request = new Request();
    //     $request->store_id = 1;
    //     $store_info = json_encode($request);
    //     $store_id = json_decode($store_info);

    //     $wiki = new Wiki();
    //     $wiki_info = $wiki->wikiSelect($store_id->store_id);
    //     return $wiki_info;
    // }

    // // wikiの登録及びUPDATE
    // public function register(){
    //     // 仮定のRequest作成及びjsonのデコード
    //     $request = new Request();
    //     $request->user_id = 1;
    //     $request->store_id = 1;
    //     $request->text = 'bbb';
    //     $request->store_user_sum = 1;
    //     $json = json_encode($request);
    //     $register = json_decode($json);

        
    //     $wiki = new Wiki();
    //     $wiki->wikiRegister($register);

    //     // ログの更新
    //     $wiki_id = Wiki::all()->where('store_id', $register->store_id)->first()->id;
    //     $wiki_log = new Wiki_log();
    //     $wiki_log->wikiLogRegister($wiki_id, $register->user_id);
    // }

    // // Wikiの削除
    // public function delete(){
    //     // 仮定のRequest作成及びjsonのデコード
    //     $request = new Request();
    //     $request->user_id = 1;
    //     $request->store_id = 1;
    //     $json = json_encode($request);
    //     $register = json_decode($json);

    //     $wiki = new Wiki();
    //     $wiki->wikiDelete($register);
    // }

}
