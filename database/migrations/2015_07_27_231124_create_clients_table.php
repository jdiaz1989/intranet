<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('name',100);
            $table->string('site_web',100);
            $table->string('address', 100);
            $table->string('name_contact', 100);
            $table->string('office', 100);
            $table->string('email', 100)->unique();
            $table->integer('phone')->unique();
            $table->integer('user_id')->unsigned();
            $table->integer('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
