<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asesorias', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 10);
            $table->unsignedBigInteger('carrera_id');
            $table->string('cuatrimestre', 50);
            $table->string('asignatura', 50);
            $table->string('unidad', 50);
            $table->string('asesor', 50);
            $table->date('fecha');
            $table->string('alum_rep', 50)->nullable();
            $table->string('asistencia', 50)->nullable();
            $table->string('resultado', 255)->nullable();
            $table->string('tipo', 50)->nullable();
            $table->string('observaciones', 255)->nullable();
            $table->string('estatus', 50)->nullable();
            $table->timestamps();

            $table->foreign('carrera_id')->references('id')->on('carreras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asesorias');
    }
};
