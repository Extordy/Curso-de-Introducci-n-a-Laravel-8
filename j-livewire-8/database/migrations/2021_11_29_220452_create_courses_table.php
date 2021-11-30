<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            //agregar campos que tendra la tabla courses
            //que usuario creo el curso
            $table->unsignedBigInteger('user_id');
            //a que categoria pertenece el curso
            $table->unsignedBigInteger('category_id');

            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->text('description');

            $table->timestamps();

            //hacer la relacion con la tabal usuarios y categorias
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
