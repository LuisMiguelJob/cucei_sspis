<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class fases extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('Fases', function(Blueprint $table){
            $table->id();
            $table->integer('ID_proyecto');
            $table->string('Nombre_fase');
            $table->integer('Tareas');
            $table->integer('Responsable');
            $table->double('Progreso');
            $table->text('Descripcion');
            $table->date('Fecha_inicio');
            $table->date('Fecha_final');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Fases');
    }
};
