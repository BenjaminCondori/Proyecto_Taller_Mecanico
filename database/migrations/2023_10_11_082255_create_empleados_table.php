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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->integer('ci')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->char('genero', 1);
            $table->integer('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('puesto_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('puesto_id')->references('id')->on('puestos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
