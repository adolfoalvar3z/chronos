<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->unsignedBigInteger('rut');
            $table->date('fecha');
            $table->time('horaingreso');
            $table->time('holasalida');
            $table->string('justificado')->nullable();
            $table->string('observacion')->nullable();
            $table->timestamps();
            $table->primary(['rut', 'fecha']);
            $table->foreign('rut')->references('rut')->on('funcionarios');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
}
