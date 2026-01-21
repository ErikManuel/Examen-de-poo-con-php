<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Examen;
use Illuminate\Support\Str;

class ExamenDemoSeeder extends Seeder
{
    public function run(): void
    {
        echo "Creando datos de demostración para el examen POO...\n";
        
        // 1. Crear examen principal
        $examen = Examen::create([
            'codigo' => Str::uuid(),
            'titulo' => 'Evaluación de Conocimientos POO - Fast Track',
            'modalidad' => 'FAST_TRACK',
            'duracion_minutos' => 120,
            'configuracion' => [
                'intentos_permitidos' => 1,
                'mostrar_resultados' => true,
                'preguntas_aleatorias' => true,
                'tiempo_estricto' => true
            ],
            'fecha_inicio' => now(),
            'fecha_fin' => now()->addDays(7),
            'activo' => true
        ]);
        
        echo "✓ Examen creado: {$examen->titulo}\n";
        
        // 2. Crear preguntas para cada concepto del examen
        $preguntas = [
            [
                'enunciado' => '1. ¿Qué es un CONSTRUCTOR y cuál es su propósito principal?',
                'tipo' => 'teorica',
                'puntos' => 20,
                'descripcion' => 'Explique el concepto de constructor en POO',
                'respuesta_correcta' => 'Inicializar el estado del objeto'
            ],
            [
                'enunciado' => '2. Demuestre la DIFERENCIA entre $this y parent:: con ejemplos',
                'tipo' => 'practica',
                'puntos' => 25,
                'descripcion' => 'Implemente código que muestre la diferencia'
            ],
            [
                'enunciado' => '3. Implemente HERENCIA con una clase base "Vehiculo" y clase hija "Auto"',
                'tipo' => 'practica',
                'puntos' => 30,
                'opciones' => ['php', 'pseudocodigo']
            ],
            [
                'enunciado' => '4. Cree una EXCEPCIÓN personalizada para validación de examen',
                'tipo' => 'practica',
                'puntos' => 20
            ],
            [
                'enunciado' => '5. Implemente una INTERFAZ "Evaluable" con métodos específicos',
                'tipo' => 'teorica',
                'puntos' => 15
            ],
            [
                'enunciado' => '6. ¿Qué es una CLASE ABSTRACTA y en qué se diferencia de una interfaz?',
                'tipo' => 'teorica',
                'puntos' => 20
            ],
            [
                'enunciado' => '7. Demuestre el uso de MÉTODOS estáticos vs de instancia',
                'tipo' => 'practica',
                'puntos' => 25
            ]
        ];
        
        foreach ($preguntas as $index => $pregunta) {
            $examen->preguntas()->create(array_merge($pregunta, [
                'orden' => $index + 1,
                'activa' => true
            ]));
            echo "  ✓ Pregunta {$index}: {$pregunta['enunciado']}\n";
        }
        
        echo "\n✅ DEMOSTRACIÓN COMPLETA\n";
        echo "=======================\n";
        echo "Examen: {$examen->titulo}\n";
        echo "Preguntas: " . $examen->preguntas()->count() . "\n";
        echo "Puntos totales: " . $examen->preguntas()->sum('puntos') . "\n";
        echo "Código: {$examen->codigo}\n";
    }
}