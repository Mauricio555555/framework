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
            $table->unsignedBigInteger('No_salon');
            $table->string('No_seguro', 20);
            $table->string('No_grado', 2);
            $table->unsignedBigInteger('padres');
            $table->string('telefono', 20);

            $table->foreign('No_salon')->references('id')->on('salones');            
            $table->foreign('padres')->references('id')->on('padres')->onDelete('cascade');
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
        Schema::dropIfExists('estudiantes');
    }
}
