<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Examen extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'modalidad',
        'duracion_minutos',
        'configuracion',
        'fecha_inicio',
        'fecha_fin',
        'activo'
    ];

    protected $casts = [
        'configuracion' => 'array',
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
        'activo' => 'boolean'
    ];

    /**
     * Constructor básico
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
        // Valores por defecto
        $this->attributes['modalidad'] = $this->attributes['modalidad'] ?? 'FAST_TRACK';
        $this->attributes['duracion_minutos'] = $this->attributes['duracion_minutos'] ?? 60;
        $this->attributes['activo'] = $this->attributes['activo'] ?? true;
        
        // Generar código único
        if (!isset($this->attributes['codigo'])) {
            $this->attributes['codigo'] = Str::uuid();
        }
    }

    /**
     * Relación con preguntas
     */
    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }
}