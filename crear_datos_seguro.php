<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Examen;
use Illuminate\Support\Str;

echo "=== CREANDO DATOS DE DEMOSTRACIÓN ===\n\n";

// 1. Crear examen
try {
    $examen = Examen::create([
        'codigo' => Str::uuid(),
        'titulo' => 'Examen POO - 7 Conceptos Principales',
        'modalidad' => 'FAST_TRACK',
        'duracion_minutos' => 120,
        'configuracion' => json_encode([
            'version' => '1.0',
            'dificultad' => 'avanzada',
            'puntos_totales' => 150
        ]),
        'fecha_inicio' => now(),
        'fecha_fin' => now()->addDays(7),
        'activo' => true
    ]);
    
    echo "✅ EXAMEN CREADO:\n";
    echo "   ID: {$examen->id}\n";
    echo "   Título: {$examen->titulo}\n";
    echo "   Código: {$examen->codigo}\n\n";
    
} catch (Exception $e) {
    echo "❌ ERROR creando examen: " . $e->getMessage() . "\n";
    exit;
}

// 2. Crear preguntas relacionadas
echo "✅ CREANDO PREGUNTAS:\n";

$preguntas = [
    [
        'enunciado' => '1. Constructor: Explique su función en POO',
        'tipo' => 'teorica',
        'puntos' => 20,
        'descripcion' => 'Inicialización de objetos'
    ],
    [
        'enunciado' => '2. Herencia: Demuestre con clase Vehículo → Auto',
        'tipo' => 'practica', 
        'puntos' => 25,
        'opciones' => json_encode(['php', 'java'])
    ],
    [
        'enunciado' => '3. This vs Super: Diferencia práctica',
        'tipo' => 'teorica',
        'puntos' => 15
    ]
];

foreach ($preguntas as $index => $pregunta) {
    try {
        $examen->preguntas()->create(array_merge($pregunta, [
            'orden' => $index + 1,
            'activa' => true
        ]));
        echo "   ✓ Pregunta {$index}: {$pregunta['enunciado']}\n";
    } catch (Exception $e) {
        echo "   ✗ Error en pregunta {$index}: " . $e->getMessage() . "\n";
    }
}

// 3. Verificar
echo "\n✅ VERIFICACIÓN FINAL:\n";
echo "   Total preguntas: " . $examen->preguntas()->count() . "\n";
echo "   Puntos totales: " . $examen->preguntas()->sum('puntos') . "\n";

echo "\n🎉 DATOS CREADOS EXITOSAMENTE!\n";
echo "🌐 Visita: http://localhost:8000/demostracion-poo\n";