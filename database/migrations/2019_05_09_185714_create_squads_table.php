<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSquadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('squads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_1_id')->unsigned()->nullable()->index();
            $table->foreign('character_1_id')->references('id')->on('characters')->onDelete('cascade');
            $table->integer('character_2_id')->unsigned()->nullable()->index();
            $table->foreign('character_2_id')->references('id')->on('characters')->onDelete('cascade');
            $table->integer('character_3_id')->unsigned()->nullable()->index();
            $table->foreign('character_3_id')->references('id')->on('characters')->onDelete('cascade');
            $table->integer('character_4_id')->unsigned()->nullable()->index();
            $table->foreign('character_4_id')->references('id')->on('characters')->onDelete('cascade');
            $table->integer('character_5_id')->unsigned()->nullable()->index();
            $table->foreign('character_5_id')->references('id')->on('characters')->onDelete('cascade');
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
        Schema::dropIfExists('squads');
    }

}
