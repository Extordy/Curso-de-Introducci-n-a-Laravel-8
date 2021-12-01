<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //agregar campos que tendra la tabla post
            //us post pertenece a un curso
            $table->unsignedBigInteger('course_id');

            $table->string('name');
            //si la lecion es publica o privada
            $table->boolean('free')->default(0);

            $table->timestamps();

            //hacer la relacion con la tabal usuarios y categorias
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
