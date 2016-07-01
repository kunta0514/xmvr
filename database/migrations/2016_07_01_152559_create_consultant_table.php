<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('consultant', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('occupational_level');     //置业级别、问答专家等
            $table->Integer('occupational_age');        //置业年龄
            $table->string('tel');           //电话
            $table->string('sale_comment');       //销售楼盘
            $table->Integer('answer_count');        //回答人数
            $table->Integer('deal_count');        //成交套数
            $table->Integer('people_count');        //带看人数
            $table->Integer('good_rate');        //好评率

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
