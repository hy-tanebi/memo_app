<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void //voidは値を返さないという意味
     */
    public function up()
    {
        Schema::create('memos', function (Blueprint $table) {
            $table->increments('id'); //idを自動的に増やしてくれる
            $table->string('title');
            $table->text('body');
            $table->timestamps(); //作成日と更新日が製成される
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()







    {
        Schema::dropIfExists('memos');
    }
}
