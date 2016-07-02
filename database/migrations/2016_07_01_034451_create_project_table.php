<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('project', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('nick_name');
            $table->Integer('price');
            $table->decimal('score',2,1);           //得分
//            $table->tinyInteger('is_hot');           //是否
            $table->Integer('comment_count');       //评论数
            $table->string('img')->nullable();          //图
            $table->string('tag')->nullable();              //标签
            $table->string('area')->nullable();             //地区
            $table->string('address')->nullable();         //地址
            $table->string('gps')->nullable();
            $table->string('opening_comment')->nullable();         //开盘信息
            $table->string('ending_comment')->nullable();         //交房信息
            $table->string('discount_comment')->nullable();      //折扣信息
            $table->string('red_packets');              //红包信息
            $table->string('red_packets_count');        //领红包人数
            $table->string('house_group');              //看房团
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
