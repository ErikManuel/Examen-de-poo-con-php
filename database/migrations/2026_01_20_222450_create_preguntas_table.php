<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('examen_id')->constrained('examen')->cascadeOnDelete();
            $table->string('enunciado');
            $table->text('descripcion')->nullable();
            $table->enum('tipo', ['teorica', 'practica', 'multiple']);
            $table->integer('puntos')->default(10);
            $table->json('opciones')->nullable();
            $table->string('respuesta_correcta')->nullable();
            $table->integer('orden')->default(0);
            $table->boolean('activa')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};