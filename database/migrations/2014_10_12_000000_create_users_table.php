<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();

            // PROFILE INFO
            $table->string('hometown')->nullable();
            $table->string('brief_description')->nullable();
            $table->string('age')->nullable();
            $table->string('profile_pic')->nullable();

            // SOFTDELETES
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
