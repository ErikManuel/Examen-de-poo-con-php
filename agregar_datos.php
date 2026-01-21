<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Examen;
use Illuminate\Support\Str;

echo "=== AGREGANDO DATOS DE DEMOSTRACIÓN ===\n\n";

// Crear examen principal
$examen = Examen::create([
    'codigo' => Str::uuid(),
    'titulo' => 'Examen Final de Programación Orientada a Objetos',
    'modalidad' => 'FAST_TRACK',
    'duracion_minutos' => 120,
    'configuracion' => [
        'version' => '2.0',
        'preguntas_totales' => 7,
        'tiempo_por_pregunta' => 15,
        'dificultad' => 'avanzada'
    ],
    'fecha_inicio' => now(),
    'fecha_fin' => now()->addDays(30),
    'activo' => true
]);

echo "✅ Examen creado: {$examen->titulo}\n";
echo "   ID: {$examen->id}\n";
echo "   Código: {$examen->codigo}\n\n";

// Crear preguntas para cada concepto
$conceptos = [
    'Constructor' => 'Implemente un constructor con valores por defecto',
    'Método' => 'Cree un método estático de fábrica',
    'Herencia' => 'Demuestre herencia con una jerarquía de 3 niveles',
    'Excepción' => 'Implemente una excepción personalizada con contexto',
    'Interfaz' => 'Cree e implemente al menos 2 interfaces',
    'Clase Abstracta' => 'Implemente una clase abstracta con método template',
    'This vs Super' => 'Explique la diferencia con ejemplos de código'
];

foreach ($conceptos as $concepto => $enunciado) {
    $examen->preguntas()->create([
        'enunciado' => "Concepto: {$concepto} - {$enunciado}",
        'tipo' => $concepto === 'Herencia' || $concepto === 'This vs Super' ? 'practica' : 'teorica',
        'puntos' => rand(15, 25),
        'descripcion' => "Evaluación del concepto: {$concepto}",
        'orden' => array_search($concepto, array_keys($conceptos)) + 1,
        'activa' => true
    ]);
    echo "✓ Pregunta: {$concepto}\n";
}

echo "\n✅ DATOS CREADOS EXITOSAMENTE!\n";
echo "   Total preguntas: " . $examen->preguntas()->count() . "\n";
echo "   Puntos totales: " . $examen->preguntas()->sum('puntos') . "\n";
echo "\n🌐 Visita ahora: http://localhost:8000/demostracion-poo\n";