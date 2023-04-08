<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class proyectos extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function(Blueprint $table){
            $table->id();
            $table->string('Nombre_proyecto');
            $table->integer('Fases');
            $table->integer('Lider_proyecto');
            $table->double('Progreso');
            $table->date('Fecha_inicio');
            $table->date('Fecha_final');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
