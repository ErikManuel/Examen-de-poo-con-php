<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('examenes', function (Blueprint $table) {
            $table->id();
            $table->uuid('codigo')->unique();
            $table->string('titulo');
            $table->enum('modalidad', ['FAST_TRACK', 'TRADICIONAL', 'INTENSIVO']);
            $table->integer('duracion_minutos');
            $table->json('configuracion')->nullable();
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('examenes');
    }
};