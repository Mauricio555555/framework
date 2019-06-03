<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->unsignedBigInteger('No_salon')->default('1');
            $table->string('No_seguro', 20)->default('1');
            $table->string('No_grado', 2)->default('1');
            $table->unsignedBigInteger('padres')->default('1');
            $table->string('telefono', 20);
            $table->unsignedBigInteger('materia_id')->default('1');
            $table->unsignedBigInteger('id_docente')->dafault('1');


            $table->foreign('padres')->references('id')->on('padres')->onDelete('cascade');
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('id_docente')->references('id')->on('users');
            $table->foreign('No_salon')->references('id')->on('salones');           
            $table->timestamps();
        });


        Schema::create('materias_estudiantes', function(Blueprint $table){

            $table->bigIncrements('id');
            $table->unsignedBigInteger('materia_id')->unsigned();
            $table->unsignedBigInteger('estudiante_id')->unsigned();

            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');

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
        Schema::dropIfExists('materias_estudiantes');
        Schema::dropIfExists('estudiantes');
    }
}
