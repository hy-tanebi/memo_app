<?php

namespace App\Http\Controllers;

use App\Models\Memo; //追加 これがあると以降はMemoの記載だけで済む
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function show($id)
    {
        $memo = Memo::find($id);
        return view('memos.show', ['memo' => $memo]);
    }
}
