<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
            //id
            $table->increments('id');
            //title
            $table->string('title', 240);
            // url
            $table->string('url', 240);
            // content
            $table->text('content');
            // created_by
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users');
            // created_at
            // updated_at
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
        Schema::drop('posts');

    }
}
