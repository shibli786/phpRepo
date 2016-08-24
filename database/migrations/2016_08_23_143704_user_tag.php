<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
$table->integer('user_id')->unsigned();
$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
$table->integer('tag_id')->unsigned();
$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        $table->engine = 'InnoDB';
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_tag');
    }
}
