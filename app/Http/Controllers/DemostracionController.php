<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemostracionController extends Controller
{
    /**
     * Página principal con los 7 conceptos
     */
    public function index()
    {
        return view('demostracion');
    }
    
    /**
     * API JSON opcional
     */
    public function api()
    {
        return response()->json([
            'status' => 'success',
            'conceptos' => [
                '1. Constructor', '2. Método', '3. Herencia', 
                '4. Excepción', '5. Interfaz', '6. Clase Abstracta', 
                '7. This vs Super'
            ],
            'implementado_en' => 'Laravel ' . app()->version(),
            'timestamp' => now()->toDateTimeString()
        ]);
    }
}