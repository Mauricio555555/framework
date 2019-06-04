<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 20);
            $table->unsignedBigInteger('calificacion')->default('1');
            $table->unsignedBigInteger('id_estudiante')->default('1');

            $table->foreign('calificacion')->references('id')->on('calificaciones')->onDelete('cascade'); 
            $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onDelete('cascade'); 
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
        Schema::dropIfExists('materias');
    }
}
