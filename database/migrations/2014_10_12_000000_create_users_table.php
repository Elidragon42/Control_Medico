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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_de_empleado')->unique();
            $table->string('name');
            $table->boolean('genero');
            $table->string('fecha_de_nacimiento');
            $table->integer('imss');
            $table->string('tipo_de_sangre');
            $table->string('alergias');
            $table->integer('telefono');
            $table->string('direccion');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
