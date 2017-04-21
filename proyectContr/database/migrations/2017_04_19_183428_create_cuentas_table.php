<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function(Blueprint $table){
            $table->increments('id');
            $table->enum('tipo_cuenta', ['informe de observaciones', 'fenecimiento', 'sancionatorio','none'])->default('none');
            $table->date('fecha_notificacion');
            $table->date('fecha_respuesta');
            $table->date('fecha_N_aviso');
            $table->enum('instancia',['primera', 'segunda','none'])->default('none');
            $table->date('fecha');
            $table->integer('n_r_informe_observacion');
            $table->integer('n_r_fenecido');
            $table->integer('n_r_sancionada');
            $table->integer('id_entidad')->unsigned();
            $table->foreign('id_entidad')->references('id')->on('entidades')->onDelete('cascade');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->remembertoken();
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
          Schema::dropIfExists('cuentas');
    }
}
