<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('news', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('Subtitle');
            $table->string('img')->nullable();
            $table->tinyInteger('is_top')->nullable();         //滚动新闻-置顶滚定
            $table->string('type')->nullable();         //1、导购，2、咨询，3、知识
            $table->tinyInteger('is_link')->nullable();      //是否外部连接
            $table->string('url')->nullable();          //连接地址
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
