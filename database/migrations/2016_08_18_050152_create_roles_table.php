<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });


            // pivot table user_role  
        Schema::create('user_role', function (Blueprint $table) {
                    $table->engine = 'InnoDB';
            $table->integer('user_id')->unsigned()->index()->foreign('user_id')->refrences('id')->on('users')->onDelete('cascade');
            $table->integer('role_id')->unsigned()->index()->foreign('role_id')->refrences('id')->on('roles')->onDelete('cascade');
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
        Schema::drop('roles');
        Schema::drop('user_role');
    }
}
