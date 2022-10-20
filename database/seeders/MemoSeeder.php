<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //DBファサード

class MemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 一件だけinsertする
        DB::table('memos')->insert([
            'title' => 'PHP',
            'body' => 'PHPは、Hypertext Preprocessorの略です。',
            'created_at' => date('Y-m-d H:i:s'), //DBファサードの時は記述が必要。エロクワントは自動でやってくれる
            'updated_at' => date('Y-m-d H:i:s'), //DBファサードの時は記述が必要。エロクワントは自動でやってくれる
        ]);

        # paramに配列を代入
        $param = [
            [
                'title' => 'HTML',
                'body' => 'HTMLは、Hypertext Markup Languageの略です。',
                'created_at' => date('Y-m-d H:i:s'), //DBファサードの時は記述が必要。エロクワントは自動でやってくれる
                'updated_at' => date('Y-m-d H:i:s'), //DBファサードの時は記述が必要。エロクワントは自動でやってくれる
            ],
            [
                'title' => 'CSS',
                'body' => "CSSは、\nCascading Style Sheets\nの略です。",
                'created_at' => date('Y-m-d H:i:s'), //DBファサードの時は記述が必要。エロクワントは自動でやってくれる
                'updated_at' => date('Y-m-d H:i:s'), //DBファサードの時は記述が必要。エロクワントは自動でやってくれる
            ]
        ];
        # DB::table->insertでレコードの登録
        DB::table('memos')->insert($param);
    }
}
