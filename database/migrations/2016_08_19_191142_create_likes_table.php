<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index()->foreign('user_id')->refrences('id')->on('users')->onDelete('cascade');
            $table->integer('article_id')->unsigned()->index()->foreign('article_id')->refrences('id')->on('articles')->onDelete('cascade');
          
            $table->timestamps();
        });
    }
    //$like->

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('likes');
    }
}
