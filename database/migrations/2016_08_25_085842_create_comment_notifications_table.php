<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('article_id')->unsigned();
            $table->integer('mark_as_read')->unsigned();
            $table->integer('owner_id')->unsigned();
              $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');      
            $table->timestamps();
     
         //   $table->foreign('comment_id')->references('id')->on('comments')->onDelete('set null');
           // $table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('article_id')->references('id')->on('articles')->onDelete('set null');  
              

               });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comment_notifications');
    }
}
