<?php

namespace App\Exceptions;

use Exception;

class ExamenExcepcion extends Exception
{
    protected array $contexto = [];
    
    public function __construct(
        string $mensaje = "", 
        array $contexto = [],
        int $codigo = 0, 
        ?\Throwable $previo = null
    ) {
        parent::__construct($mensaje, $codigo, $previo);
        $this->contexto = $contexto;
    }
    
    public function getContexto(): array
    {
        return $this->contexto;
    }
    
    public function toArray(): array
    {
        return [
            'error' => $this->getMessage(),
            'codigo' => $this->getCode(),
            'contexto' => $this->contexto
        ];
    }
}