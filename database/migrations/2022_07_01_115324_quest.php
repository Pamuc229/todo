<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Quest extends Migration
{

    public function up()
    {
        Schema::create('quests',function (Blueprint $table){
            $table->increments('id');
            $table->string('user_id',255);
            $table->string('quest',255)->nullable(false);
            $table->string('remember_token',100)->nullable(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
