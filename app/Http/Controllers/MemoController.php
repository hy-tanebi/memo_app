<?php

namespace App\Http\Controllers;

use App\Models\Memo; //追加 これがあると以降はMemoの記載だけで済む
use Illuminate\Http\Request;

class MemoController extends Controller
{
    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $memos = Memo::all();
        // memosティレクトリーの中のindexページを指定し、memosの連想配列を代入
        return view('memos.index', ['memos' => $memos]);
    }

    // showページへ移動
    public function show($id)
    {
        $memo = Memo::find($id);
        return view('memos.show', ['memo' => $memo]);
    }
}
