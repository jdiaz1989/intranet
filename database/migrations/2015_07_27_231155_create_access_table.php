<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access', function (Blueprint $table) {
          
              $table->increments('id');
            $table->string('server',100);
            $table->string('port', 100);
            $table->string('username', 100);
            $table->string('password', 200);
            $table->string('url', 100);
            $table->string('type', 100);
            $table->integer('client_id')->unsigned();
            $table->timestamps();

             $table->foreign('client_id')->references('id')->on('clients');
              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('access');
    }
}
