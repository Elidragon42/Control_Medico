<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numero_de_empleado');
            $table->text('descripcion');
            $table->string('medico');
            $table->bigInteger('id_procedimiento')->nullable();
            $table->text('diagnostico');
            $table->date('fecha_consulta');
            $table->date('fecha_revision');
            $table->string('estado');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
