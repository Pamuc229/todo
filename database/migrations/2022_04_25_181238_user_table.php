<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    public function up()
    {
        Schema::create('users',function (Blueprint $table){
            $table->increments('id');
            $table->string('login',255)->nullable(false)->unique('login');
            $table->string('password',255)->nullable(false);
            $table->string('remember_token',100)->nullable(true);
            $table->timestamps();
        });
    }
    public function down()
    {
        //
    }
}
