<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_asistencias', function (Blueprint $table) {
            $table->id();
            $table->date('horaentrada');
            $table->date('horasalida');
            $table->date('horaatraso');
            $table->string('mantencion');
            //email
            $table->string('hostmail');
            $table->string('usernamemail');
            $table->string('passwordmail');
            $table->string('portmail');
            $table->string('asuntoemail');
            $table->string('nombreenviamail');
            $table->string('enviamail');
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
        Schema::dropIfExists('conf_asistencias');
    }
}
