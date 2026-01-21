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
        Schema::create('examen', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('modalidad');
            $table->integer('duracion_minutos');
            $table->json('configuracion')->nullable();
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
            $table->boolean('activo')->default(true);
            $table->string('codigo')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen');
    }
};
