<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprobacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprobacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('memoria')->nullable();
            $table->string('comision')->nullable();
            $table->string('proponente');
            $table->string('Validado_pro');
            $table->string('fecha_pro');
            $table->string('Validado_sd');
            $table->string('fecha_sd');
            $table->string('autorizado');
            $table->string('Validado_aut');
            $table->string('fecha_aut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aprobacion');
    }
}
