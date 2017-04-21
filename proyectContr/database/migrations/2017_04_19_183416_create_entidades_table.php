<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
       Schema::create('entidades',function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('responsable');
            $table->string('email');
            $table->integer('id_municipio')->unsigned();
            $table->foreign('id_municipio')->references('id')
            ->on('municipios')->onDelete('cascade');
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
        Schema::dropIfExists('entidades');
    }
}