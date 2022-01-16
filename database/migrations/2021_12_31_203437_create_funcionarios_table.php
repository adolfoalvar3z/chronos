<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id('rut')->unique();
            $table->integer('dv');
            $table->string('nombre', 100);
            $table->string('appat', 50);
            $table->string('apmat', 50);
            $table->string('direccion')->nullable();
            $table->string('numdireccion', 20)->nullable();
            $table->string('bloque')->nullable();
            $table->string('depto')->nullable();
            $table->string('poblacion')->nullable();
            $table->string('comuna', 50)->nullable();
            $table->string('localidad')->nullable();
            $table->string('region', 50)->nullable();
            $table->string('fonoparticular')->nullable();
            $table->string('celular')->nullable();
            $table->string('fonolaboral')->nullable();
            $table->string('estadocivil', 20)->nullable();
            $table->string('jurisdiccion')->nullable();
            $table->string('organica')->nullable();
            $table->string('tipounidad')->nullable();
            $table->string('unidadlaboral')->nullable();
            $table->date('fecnacimiento')->nullable();
            $table->string('institucionprevisional')->nullable();
            $table->string('instituciondesalud')->nullable();
            $table->string('cargo')->nullable();
            $table->string('calidad')->nullable();
            $table->string('estado')->nullable();
            $table->string('tipodocnombramiento')->nullable();
            $table->date('fechadocnombramiento')->nullable();
            $table->string('numdocnombramiento')->nullable();
            $table->date('fecnombramiento')->nullable();
            $table->date('fecasuncion')->nullable();
            $table->date('fectermino')->nullable();
            $table->string('grado')->nullable();
            $table->string('escalafon')->nullable();
            $table->string('genero')->nullable();
            $table->string('edad')->nullable();
            $table->string('estadoactual')->nullable();
            $table->string('escaladesueldo')->nullable();
            $table->string('asignacionprofesional')->nullable();
            $table->string('profesion')->nullable();
            $table->string('institucionsuperior')->nullable();
            $table->string('seccionadministrativa')->nullable();
            $table->string('emailinstitucional', 100);
            $table->date('fecingresoalservicio')->nullable();
            $table->date('fecingresoalaplanta')->nullable();
            $table->date('fecingresoalacategoria')->nullable();
            $table->string('sociobienestar')->nullable();
            $table->string('clasedeplaza')->nullable();
            $table->date('terminoreal')->nullable();
            $table->string('comunaunidad')->nullable();
            $table->string('partida')->nullable();
            $table->string('asientodelaunidad')->nullable();
            $table->string('tipodeplazacontrata')->nullable();
            $table->string('discapacidadvigente')->nullable();
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
        Schema::dropIfExists('funcionarios');
    }
}
