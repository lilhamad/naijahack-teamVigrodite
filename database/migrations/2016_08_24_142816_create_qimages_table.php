<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qimages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('size');
            $table->string('path');
            $table->string('slug');
            $table->string('label');
            $table->tinyInteger('visibility')->default(1);
            $table->integer('question_id');
            $table->integer('user_id');
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
        Schema::drop('qimages');
    }
}
