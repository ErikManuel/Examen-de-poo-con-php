<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Examen;
use App\Models\Pregunta;

echo "=== LIMPIANDO DATOS INEXISTENTES ===\n\n";

// Contar antes
$examenesAntes = Examen::count();
$preguntasAntes = Pregunta::count();

echo "Antes:\n";
echo "- Exámenes: {$examenesAntes}\n";
echo "- Preguntas: {$preguntasAntes}\n\n";

// Si hay muchos datos, podemos resetear
if ($examenesAntes > 5) {
    echo "⚠️ Demasiados datos. Reseteando...\n";
    
    // Eliminar todas las preguntas primero (por las claves foráneas)
    Pregunta::truncate();
    Examen::truncate();
    
    echo "✅ Base de datos limpiada\n";
    
    // Crear un solo examen de demostración
    $examen = Examen::create([
        'titulo' => 'Examen POO - 7 Conceptos Principales',
        'modalidad' => 'FAST_TRACK',
        'duracion_minutos' => 120,
        'activo' => true
    ]);
    
    echo "✅ Examen demo creado: {$examen->titulo}\n";
} else {
    echo "✅ Cantidad de datos normal. No se realizan cambios.\n";
}

// Contar después
$examenesDespues = Examen::count();
$preguntasDespues = Pregunta::count();

echo "\nDespués:\n";
echo "- Exámenes: {$examenesDespues}\n";
echo "- Preguntas: {$preguntasDespues}\n";
echo "\n🌐 Visita: http://localhost:8000/demostracion-poo\n";