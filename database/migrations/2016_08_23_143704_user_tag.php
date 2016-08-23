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
$table->integer('user_id')->unsigned()->index()->foriegn('user_id')->refrences('id')->on('users')->onDelete('cascade');
$table->integer('tag_id')->unsigned()->index()->foriegn('tag_id')->refrences('id')->on('tags')->onDelete('cascade');
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
