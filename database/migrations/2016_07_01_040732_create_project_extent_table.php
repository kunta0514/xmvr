<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectExtentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('project_extent', function(Blueprint $table)
        {
            $table->increments('id');
            $table->Integer('project_id');
            $table->Integer('sale_address');
            $table->string('buliding_type')->nullable();        //物业类型
            $table->string('property_type')->nullable();         //建筑类别
            $table->string('decorate')->nullable();             //装修状况
            $table->string('households')->nullable();           //住户数
            $table->string('volume_ratio')->nullable();                //容积率
            $table->string('parking_space')->nullable();        //停车位
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
