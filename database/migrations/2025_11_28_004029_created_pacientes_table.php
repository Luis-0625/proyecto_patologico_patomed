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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_ingreso');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula')->nullable();
            $table->date('fecha_nacimiento');
            $table->string('eps');
            $table->string('edad')->nullable();
            $table->string('sexo');
            $table->timestamps();

            $table->string('des_macro');
            $table->string('des_micro');
            $table->string('diagnostico_final');
            $table->string('resultado_lab');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
