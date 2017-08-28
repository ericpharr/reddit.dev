<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function(Blueprint $table){
            //id
            $table->increments('id');
            // user_id
            $table->integer('user_id')->unsigned();
            // post_id
            $table->integer('post_id')->unsigned();
            // vote
            $table->integer('vote');
            // created_at
            // updated_at
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('posts');
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
        Schema::drop('votes');
    }
}
