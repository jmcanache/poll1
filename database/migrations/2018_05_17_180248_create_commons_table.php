<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('university');
            $table->string('country');
            $table->string('first_question');
            $table->string('second_question');
            $table->string('official_link');
            $table->string('bam_link');
            $table->string('help_text');
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
        Schema::drop('commons');
    }
}
