<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');

            $table->string('tag_name');
            $table->timestamps();
        });

         Schema::create('tag_article', function (Blueprint $table) {
            $table->integer('tag_id')->unsigned()->index()->foriegn()->refrences('id')->on('tags');

                 $table->integer('article_id')->unsigned()->index()->foriegn()->refrences('id')->on('articles');
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
        Schema::drop('tags');
        Schema::drop('tag_article');
    }
}
