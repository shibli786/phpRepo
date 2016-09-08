<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('like_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('article_id')->unsigned();
            $table->integer('mark_as_read')->unsigned();
          //  $table->foreign('like_id')->references('id')->on('likes')->onDelete('set null');
           // $table->foreign('user_id')->references('id')->on('users');
          //  $table->foreign('article_id')->references('id')->on('articles')->onDelete('set null');
              $table->integer('owner_id')->unsigned();
              $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::drop('like_notifications');
    }
}
