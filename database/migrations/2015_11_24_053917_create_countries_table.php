<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->string('name');
            $table->longText('vital_info')->nullable();
            $table->string('code');

            $table->integer('region_id')
                ->unsigned()
                ->nullable();
            $table->foreign('region_id')
                ->references('id')->on('regions')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries');
    }
}
