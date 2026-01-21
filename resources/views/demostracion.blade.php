<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen POO - 7 Conceptos Principales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .concepto-card {
            background: white;
            border-radius: 15px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 20px;
            overflow: hidden;
        }
        .concepto-card:hover {
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        .concepto-card.active {
            box-shadow: 0 0 0 3px #667eea, 0 15px 35px rgba(0,0,0,0.15);
        }
        .concepto-header {
            padding: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            user-select: none;
            transition: background-color 0.2s;
        }
        .concepto-header:hover {
            background-color: #f8f9fa;
        }
        .concepto-numero {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            flex-shrink: 0;
        }
        .concepto-info {
            flex-grow: 1;
            margin-left: 15px;
        }
        .concepto-icono {
            transition: transform 0.3s ease;
        }
        .concepto-icono.rotated {
            transform: rotate(180deg);
        }
        .concepto-contenido {
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }
        .concepto-contenido.show {
            max-height: 500px; /* Altura máxima con scroll */
        }
        .contenido-interno {
            padding: 25px;
            max-height: 450px;
            overflow-y: auto;
        }
        .contenido-interno::-webkit-scrollbar {
            width: 6px;
        }
        .contenido-interno::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }
        .contenido-interno::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }
        .contenido-interno::-webkit-scrollbar-thumb:hover {
            background: #a1a1a1;
        }
        .codigo-ejemplo {
            background: #2d3748;
            color: #e2e8f0;
            border-radius: 10px;
            padding: 20px;
            font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
            font-size: 13px;
            line-height: 1.5;
            overflow-x: auto;
            margin-top: 15px;
            max-height: 300px;
            overflow-y: auto;
        }
        .codigo-ejemplo::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .codigo-ejemplo::-webkit-scrollbar-track {
            background: #1a202c;
            border-radius: 3px;
        }
        .codigo-ejemplo::-webkit-scrollbar-thumb {
            background: #4a5568;
            border-radius: 3px;
        }
        .definicion {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 15px;
            border-radius: 0 8px 8px 0;
            margin-bottom: 15px;
        }
        .teoria {
            background: #e8f4fd;
            border-left: 4px solid #2196f3;
            padding: 15px;
            border-radius: 0 8px 8px 0;
            margin-bottom: 15px;
        }
        .keywords {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 15px;
        }
        .keyword {
            background: #e0e7ff;
            color: #4f46e5;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <!-- Header -->
        <div class="text-center text-white mb-5">
            <h1 class="display-4 fw-bold mb-3">
                <i class="fas fa-code me-3"></i>
                Examen POO - 7 Conceptos Principales
            </h1>
            <p class="lead mb-4">Haz clic en el encabezado de cada concepto para ver detalles</p>
            <div class="d-flex justify-content-center gap-3">
                <span class="badge bg-light text-dark px-3 py-2">
                    <i class="fab fa-laravel me-1"></i> Laravel
                </span>
                <span class="badge bg-light text-dark px-3 py-2">
                    <i class="fas fa-check-circle me-1"></i> 7/7 Implementados
                </span>
            </div>
        </div>

        <!-- Los 7 Conceptos - Acordeón -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <!-- CONCEPTO 1: CONSTRUCTOR -->
                <div class="concepto-card" id="card-1">
                    <div class="concepto-header" onclick="toggleConcepto(1)">
                        <div class="concepto-numero">1</div>
                        <div class="concepto-info">
                            <h3 class="h5 mb-1 fw-bold">Constructor</h3>
                            <p class="text-muted mb-0">Método especial para inicializar objetos</p>
                        </div>
                        <i class="fas fa-chevron-down concepto-icono" id="icono-1"></i>
                    </div>
                    <div class="concepto-contenido" id="contenido-1">
                        <div class="contenido-interno">
                            <!-- Definición -->
                            <div class="definicion">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-book me-2 text-primary"></i>Definición
                                </h5>
                                <p class="mb-0">Método especial que se ejecuta automáticamente al crear una instancia de una clase. Su función principal es inicializar los atributos del objeto.</p>
                            </div>
                            
                            <!-- Teoría -->
                            <div class="teoria">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-lightbulb me-2 text-warning"></i>Teoría
                                </h5>
                                <p>En PHP, el constructor se define con <code>__construct()</code>. Puede recibir parámetros para configurar el estado inicial del objeto. Es el lugar ideal para establecer valores por defecto y validaciones iniciales.</p>
                                <div class="keywords">
                                    <span class="keyword">__construct()</span>
                                    <span class="keyword">new ClassName()</span>
                                    <span class="keyword">Inicialización</span>
                                    <span class="keyword">Valores por defecto</span>
                                </div>
                            </div>
                            
                            <!-- Ejemplo de Código -->
                            <h5 class="fw-bold mt-4 mb-3">
                                <i class="fas fa-code me-2 text-success"></i>Ejemplo en Laravel
                            </h5>
                            <div class="codigo-ejemplo">
<pre><code>// app/Models/Examen.php
class Examen extends Model
{
    /**
     * Constructor con valores por defecto
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
        // Valores por defecto si no se proporcionan
        $this->modalidad = $attributes['modalidad'] ?? 'FAST_TRACK';
        $this->duracion_minutos = $attributes['duracion_minutos'] ?? 60;
        $this->activo = $attributes['activo'] ?? true;
        
        // Generar código único automáticamente
        if (empty($this->codigo)) {
            $this->codigo = \Illuminate\Support\Str::uuid();
        }
        
        // Validación inicial
        if ($this->duracion_minutos <= 0) {
            throw new \InvalidArgumentException(
                'La duración debe ser positiva'
            );
        }
    }
}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONCEPTO 2: MÉTODO -->
                <div class="concepto-card" id="card-2">
                    <div class="concepto-header" onclick="toggleConcepto(2)">
                        <div class="concepto-numero">2</div>
                        <div class="concepto-info">
                            <h3 class="h5 mb-1 fw-bold">Método</h3>
                            <p class="text-muted mb-0">Comportamientos y acciones de los objetos</p>
                        </div>
                        <i class="fas fa-chevron-down concepto-icono" id="icono-2"></i>
                    </div>
                    <div class="concepto-contenido" id="contenido-2">
                        <div class="contenido-interno">
                            <div class="definicion">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-book me-2 text-primary"></i>Definición
                                </h5>
                                <p class="mb-0">Funciones definidas dentro de una clase que representan el comportamiento de los objetos. Pueden ser públicos, protegidos o privados.</p>
                            </div>
                            
                            <div class="teoria">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-lightbulb me-2 text-warning"></i>Teoría
                                </h5>
                                <p>Los métodos permiten la interacción con el objeto. Los métodos estáticos pertenecen a la clase (no a la instancia) y se llaman con <code>ClassName::metodo()</code>. Los métodos de instancia se llaman con <code>$objeto->metodo()</code>.</p>
                                <div class="keywords">
                                    <span class="keyword">public/private/protected</span>
                                    <span class="keyword">static</span>
                                    <span class="keyword">$this</span>
                                    <span class="keyword">Métodos de fábrica</span>
                                </div>
                            </div>
                            
                            <h5 class="fw-bold mt-4 mb-3">
                                <i class="fas fa-code me-2 text-success"></i>Ejemplo en Laravel
                            </h5>
                            <div class="codigo-ejemplo">
<pre><code>// app/Models/Examen.php
class Examen extends Model
{
    /**
     * MÉTODO DE INSTANCIA - Accede a $this
     */
    public function calcularTiempoPorPregunta(): float
    {
        if ($this->preguntas_count === 0) {
            return 0;
        }
        return $this->duracion_minutos / $this->preguntas_count;
    }
    
    /**
     * MÉTODO ESTÁTICO (Fábrica) - No necesita instancia
     */
    public static function crearFastTrack(string $titulo): self
    {
        return self::create([
            'titulo' => $titulo,
            'modalidad' => 'FAST_TRACK',
            'duracion_minutos' => 45,
            'configuracion' => [
                'intentos' => 1,
                'aleatorio' => true
            ]
        ]);
    }
    
    /**
     * MÉTODO MÁGICO - __toString()
     */
    public function __toString(): string
    {
        return "[{$this->modalidad}] {$this->titulo}";
    }
}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONCEPTO 3: HERENCIA -->
                <div class="concepto-card" id="card-3">
                    <div class="concepto-header" onclick="toggleConcepto(3)">
                        <div class="concepto-numero">3</div>
                        <div class="concepto-info">
                            <h3 class="h5 mb-1 fw-bold">Herencia</h3>
                            <p class="text-muted mb-0">Reutilización y extensión de funcionalidad</p>
                        </div>
                        <i class="fas fa-chevron-down concepto-icono" id="icono-3"></i>
                    </div>
                    <div class="concepto-contenido" id="contenido-3">
                        <div class="contenido-interno">
                            <div class="definicion">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-book me-2 text-primary"></i>Definición
                                </h5>
                                <p class="mb-0">Mecanismo que permite a una clase (hija) heredar propiedades y métodos de otra clase (padre), promoviendo la reutilización de código.</p>
                            </div>
                            
                            <div class="teoria">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-lightbulb me-2 text-warning"></i>Teoría
                                </h5>
                                <p>La herencia establece una relación "es-un" entre clases. La clase hija puede sobreescribir métodos del padre (<i>override</i>) y acceder a los métodos protegidos y públicos del padre usando <code>parent::</code>.</p>
                                <div class="keywords">
                                    <span class="keyword">extends</span>
                                    <span class="keyword">parent::</span>
                                    <span class="keyword">Override</span>
                                    <span class="keyword">Jerarquía</span>
                                </div>
                            </div>
                            
                            <h5 class="fw-bold mt-4 mb-3">
                                <i class="fas fa-code me-2 text-success"></i>Ejemplo en Laravel
                            </h5>
                            <div class="codigo-ejemplo">
<pre><code>// app/Domain/Preguntas/PreguntaBase.php (Clase Padre)
abstract class PreguntaBase
{
    protected string $enunciado;
    protected int $puntos;
    protected string $tipo;
    
    // Constructor protegido - solo para clases hijas
    protected function __construct(string $enunciado, int $puntos, string $tipo)
    {
        $this->enunciado = $enunciado;
        $this->puntos = $puntos;
        $this->tipo = $tipo;
    }
    
    // Método abstracto - debe implementarse en hijas
    abstract public function calcularDificultad(): float;
    
    // Método concreto - heredado por todas las hijas
    public function getEnunciado(): string
    {
        return $this->enunciado;
    }
}

// app/Domain/Preguntas/PreguntaTeorica.php (Clase Hija)
class PreguntaTeorica extends PreguntaBase
{
    private int $longitudRespuesta;
    
    public function __construct(string $enunciado, int $puntos = 10)
    {
        // Llamada al constructor del padre
        parent::__construct($enunciado, $puntos, 'teorica');
        $this->longitudRespuesta = 200;
    }
    
    // Implementación del método abstracto
    public function calcularDificultad(): float
    {
        return $this->puntos * 1.5;
    }
    
    // Método específico de esta clase hija
    public function getRequisitos(): array
    {
        return [
            'longitud_minima' => $this->longitudRespuesta,
            'tipo_base' => parent::getEnunciado() // Acceso al padre
        ];
    }
}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONCEPTO 4: EXCEPCIÓN -->
                <div class="concepto-card" id="card-4">
                    <div class="concepto-header" onclick="toggleConcepto(4)">
                        <div class="concepto-numero">4</div>
                        <div class="concepto-info">
                            <h3 class="h5 mb-1 fw-bold">Excepción</h3>
                            <p class="text-muted mb-0">Manejo elegante de errores</p>
                        </div>
                        <i class="fas fa-chevron-down concepto-icono" id="icono-4"></i>
                    </div>
                    <div class="concepto-contenido" id="contenido-4">
                        <div class="contenido-interno">
                            <div class="definicion">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-book me-2 text-primary"></i>Definición
                                </h5>
                                <p class="mb-0">Evento anormal o condición excepcional que ocurre durante la ejecución de un programa, interrumpiendo el flujo normal de instrucciones.</p>
                            </div>
                            
                            <div class="teoria">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-lightbulb me-2 text-warning"></i>Teoría
                                </h5>
                                <p>Las excepciones se lanzan con <code>throw</code> y se capturan con <code>try-catch</code>. Permiten separar el código normal del manejo de errores. Se pueden crear jerarquías personalizadas.</p>
                                <div class="keywords">
                                    <span class="keyword">try-catch</span>
                                    <span class="keyword">throw</span>
                                    <span class="keyword">Exception</span>
                                    <span class="keyword">finally</span>
                                </div>
                            </div>
                            
                            <h5 class="fw-bold mt-4 mb-3">
                                <i class="fas fa-code me-2 text-success"></i>Ejemplo en Laravel
                            </h5>
                            <div class="codigo-ejemplo">
<pre><code>// app/Exceptions/ExamenExcepcion.php (Excepción personalizada)
class ExamenExcepcion extends Exception
{
    protected array $contexto = [];
    
    public function __construct(
        string $mensaje = "", 
        array $contexto = [],
        int $codigo = 0, 
        ?Throwable $previo = null
    ) {
        parent::__construct($mensaje, $codigo, $previo);
        $this->contexto = $contexto;
    }
    
    public function getContexto(): array
    {
        return $this->contexto;
    }
}

// app/Exceptions/PreguntaInvalidaException.php (Excepción específica)
class PreguntaInvalidaException extends ExamenExcepcion
{
    public static function porPuntosInvalidos(int $puntos): self
    {
        return new self(
            "Puntos inválidos: {$puntos}",
            ['puntos' => $puntos, 'limite' => 100],
            400
        );
    }
}

// Uso en el controlador
try {
    if ($puntos > 100) {
        throw PreguntaInvalidaException::porPuntosInvalidos($puntos);
    }
    // Código normal...
} catch (PreguntaInvalidaException $e) {
    return response()->json([
        'error' => $e->getMessage(),
        'contexto' => $e->getContexto()
    ], $e->getCode());
}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONCEPTO 5: INTERFAZ -->
                <div class="concepto-card" id="card-5">
                    <div class="concepto-header" onclick="toggleConcepto(5)">
                        <div class="concepto-numero">5</div>
                        <div class="concepto-info">
                            <h3 class="h5 mb-1 fw-bold">Interfaz</h3>
                            <p class="text-muted mb-0">Contratos que deben cumplir las clases</p>
                        </div>
                        <i class="fas fa-chevron-down concepto-icono" id="icono-5"></i>
                    </div>
                    <div class="concepto-contenido" id="contenido-5">
                        <div class="contenido-interno">
                            <div class="definicion">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-book me-2 text-primary"></i>Definición
                                </h5>
                                <p class="mb-0">Contrato que define un conjunto de métodos que una clase debe implementar, sin especificar cómo lo hará.</p>
                            </div>
                            
                            <div class="teoria">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-lightbulb me-2 text-warning"></i>Teoría
                                </h5>
                                <p>Las interfaces establecen "qué" debe hacer una clase, no "cómo" lo hace. Una clase puede implementar múltiples interfaces. Promueven el desacoplamiento y el polimorfismo.</p>
                                <div class="keywords">
                                    <span class="keyword">interface</span>
                                    <span class="keyword">implements</span>
                                    <span class="keyword">múltiples interfaces</span>
                                    <span class="keyword">contrato</span>
                                </div>
                            </div>
                            
                            <h5 class="fw-bold mt-4 mb-3">
                                <i class="fas fa-code me-2 text-success"></i>Ejemplo en Laravel
                            </h5>
                            <div class="codigo-ejemplo">
<pre><code>// app/Contracts/Evaluable.php (Interfaz 1)
interface Evaluable
{
    public function calcularPuntuacion(): int;
    public function validarParaEvaluacion(): bool;
    public function getTiempoEstimado(): int;
}

// app/Contracts/Renderizable.php (Interfaz 2)
interface Renderizable
{
    public function render(): string;
    public function toArray(): array;
}

// app/Domain/ExamenEvaluable.php (Implementa múltiples interfaces)
class ExamenEvaluable implements Evaluable, Renderizable
{
    private Examen $examen;
    private array $preguntas;
    
    public function __construct(Examen $examen, array $preguntas = [])
    {
        $this->examen = $examen;
        $this->preguntas = $preguntas;
    }
    
    // Implementación de Evaluable
    public function calcularPuntuacion(): int
    {
        return array_reduce($this->preguntas, 
            fn($total, $pregunta) => $total + $pregunta['puntos'], 
            0
        );
    }
    
    public function validarParaEvaluacion(): bool
    {
        return !empty($this->preguntas) && $this->examen->activo;
    }
    
    public function getTiempoEstimado(): int
    {
        return count($this->preguntas) * 2;
    }
    
    // Implementación de Renderizable
    public function render(): string
    {
        return "&lt;div&gt;{$this->examen->titulo}&lt;/div&gt;";
    }
    
    public function toArray(): array
    {
        return [
            'examen' => $this->examen->toArray(),
            'puntuacion_total' => $this->calcularPuntuacion(),
            'valido' => $this->validarParaEvaluacion()
        ];
    }
}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONCEPTO 6: CLASE ABSTRACTA -->
                <div class="concepto-card" id="card-6">
                    <div class="concepto-header" onclick="toggleConcepto(6)">
                        <div class="concepto-numero">6</div>
                        <div class="concepto-info">
                            <h3 class="h5 mb-1 fw-bold">Clase Abstracta</h3>
                            <p class="text-muted mb-0">Plantillas para clases hijas</p>
                        </div>
                        <i class="fas fa-chevron-down concepto-icono" id="icono-6"></i>
                    </div>
                    <div class="concepto-contenido" id="contenido-6">
                        <div class="contenido-interno">
                            <div class="definicion">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-book me-2 text-primary"></i>Definición
                                </h5>
                                <p class="mb-0">Clase que no puede ser instanciada directamente y sirve como plantilla para otras clases. Puede contener métodos abstractos y concretos.</p>
                            </div>
                            
                            <div class="teoria">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-lightbulb me-2 text-warning"></i>Teoría
                                </h5>
                                <p>Las clases abstractas permiten definir una estructura común para un grupo de clases relacionadas. Los métodos abstractos deben implementarse en las clases hijas. Pueden implementar el patrón Template Method.</p>
                                <div class="keywords">
                                    <span class="keyword">abstract class</span>
                                    <span class="keyword">abstract method</span>
                                    <span class="keyword">Template Method</span>
                                    <span class="keyword">no instanciable</span>
                                </div>
                            </div>
                            
                            <h5 class="fw-bold mt-4 mb-3">
                                <i class="fas fa-code me-2 text-success"></i>Ejemplo en Laravel
                            </h5>
                            <div class="codigo-ejemplo">
<pre><code>// app/Abstracts/ProcesadorExamen.php
abstract class ProcesadorExamen
{
    protected Examen $examen;
    protected array $resultados = [];
    
    protected function __construct(Examen $examen)
    {
        $this->examen = $examen;
    }
    
    /**
     * MÉTODO TEMPLATE - Define el esqueleto del algoritmo
     * Patrón Template Method
     */
    final public function procesar(): array
    {
        $this->inicializar();
        $this->validar();
        $this->ejecutarProceso();
        $this->finalizar();
        
        return $this->resultados;
    }
    
    /**
     * Métodos abstractos - deben implementarse en subclases
     */
    abstract protected function validar(): void;
    abstract protected function ejecutarProceso(): void;
    
    /**
     * Métodos concretos - ya implementados
     */
    protected function inicializar(): void
    {
        $this->resultados['inicio'] = now();
    }
    
    protected function finalizar(): void
    {
        $this->resultados['fin'] = now();
        $this->resultados['duracion'] = 
            $this->resultados['fin']->diff($this->resultados['inicio']);
    }
    
    /**
     * Método estático de fábrica
     */
    public static function crear(string $tipo, Examen $examen): self
    {
        return match($tipo) {
            'correccion' => new CorrectorExamen($examen),
            'calificacion' => new CalificadorExamen($examen),
            default => throw new InvalidArgumentException("Tipo inválido")
        };
    }
}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONCEPTO 7: THIS vs SUPER -->
                <div class="concepto-card" id="card-7">
                    <div class="concepto-header" onclick="toggleConcepto(7)">
                        <div class="concepto-numero">7</div>
                        <div class="concepto-info">
                            <h3 class="h5 mb-1 fw-bold">This vs Super</h3>
                            <p class="text-muted mb-0">Diferencias entre instancia actual y clase padre</p>
                        </div>
                        <i class="fas fa-chevron-down concepto-icono" id="icono-7"></i>
                    </div>
                    <div class="concepto-contenido" id="contenido-7">
                        <div class="contenido-interno">
                            <div class="definicion">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-book me-2 text-primary"></i>Definición
                                </h5>
                                <p class="mb-0"><code>$this</code> referencia la instancia actual del objeto. <code>parent::</code> referencia la clase padre de la clase actual.</p>
                            </div>
                            
                            <div class="teoria">
                                <h5 class="fw-bold mb-2">
                                    <i class="fas fa-lightbulb me-2 text-warning"></i>Teoría
                                </h5>
                                <p><strong>$this</strong> se usa para acceder a propiedades y métodos de la instancia actual (late binding). <strong>parent::</strong> se usa para acceder específicamente a métodos de la clase padre, útil para extender funcionalidad en lugar de reemplazarla completamente.</p>
                                <div class="keywords">
                                    <span class="keyword">$this</span>
                                    <span class="keyword">parent::</span>
                                    <span class="keyword">self::</span>
                                    <span class="keyword">static::</span>
                                    <span class="keyword">Late Binding</span>
                                </div>
                            </div>
                            
                            <h5 class="fw-bold mt-4 mb-3">
                                <i class="fas fa-code me-2 text-success"></i>Ejemplo en Laravel
                            </h5>
                            <div class="codigo-ejemplo">
<pre><code>class ClaseBase
{
    protected string $tipo = 'Base';
    protected static string $clase = 'ClaseBase';
    
    public function obtenerTipo(): string
    {
        // $this referencia la instancia ACTUAL
        return $this->tipo;
    }
    
    public static function obtenerClase(): string
    {
        // self:: siempre referencia ClaseBase
        return self::$clase;
    }
    
    public static function obtenerClaseStatic(): string
    {
        // static:: hace Late Static Binding
        return static::$clase;
    }
}

class ClaseDerivada extends ClaseBase
{
    protected string $tipo = 'Derivada'; // Sobreescribe
    protected static string $clase = 'ClaseDerivada'; // Sobreescribe
    
    public function demostrarThisParent(): array
    {
        return [
            // $this->tipo devuelve 'Derivada' (de esta instancia)
            'this->tipo' => $this->tipo,
            
            // parent::obtenerTipo() llama al método del PADRE
            // pero $this dentro del padre sigue siendo esta instancia
            'parent::obtenerTipo()' => parent::obtenerTipo(),
            
            // self:: siempre referencia ClaseDerivada aquí
            'self::obtenerClase()' => self::obtenerClase(),
            
            // parent::obtenerClase() llama al método estático del padre
            'parent::obtenerClase()' => parent::obtenerClase(),
            
            // static:: hace Late Static Binding
            'static::obtenerClaseStatic()' => static::obtenerClaseStatic(),
            
            // parent::obtenerClaseStatic() también hace LSB
            'parent::obtenerClaseStatic()' => parent::obtenerClaseStatic()
        ];
    }
    
    /**
     * Ejemplo práctico: Extender funcionalidad del padre
     */
    public function obtenerTipo(): string
    {
        // Primero obtenemos lo que hace el padre
        $tipoBase = parent::obtenerTipo();
        
        // Luego agregamos nuestra funcionalidad
        return "[Extendido] {$tipoBase} -> {$this->tipo}";
    }
}

// Uso:
$obj = new ClaseDerivada();
echo $obj->demostrarThisParent();</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer text-center text-white">
            <p class="mb-2">
                <i class="fas fa-graduation-cap me-2"></i>
                Examen POO - 7 Conceptos Principales
            </p>
            <p class="small opacity-75 mb-0">
                Implementación completa con Laravel | Click en encabezados para expandir
            </p>
        </div>
    </div>

    <script>
        // Solo un concepto abierto a la vez
        let conceptoAbierto = 1; // Por defecto el primero
        
        function toggleConcepto(numero) {
            const contenido = document.getElementById(`contenido-${numero}`);
            const icono = document.getElementById(`icono-${numero}`);
            const card = document.getElementById(`card-${numero}`);
            
            // Si ya está abierto, cerrarlo
            if (conceptoAbierto === numero) {
                contenido.classList.remove('show');
                icono.classList.remove('rotated');
                card.classList.remove('active');
                conceptoAbierto = null;
            } 
            // Si hay otro abierto, cerrarlo y abrir este
            else if (conceptoAbierto !== null) {
                const contenidoAnterior = document.getElementById(`contenido-${conceptoAbierto}`);
                const iconoAnterior = document.getElementById(`icono-${conceptoAbierto}`);
                const cardAnterior = document.getElementById(`card-${conceptoAbierto}`);
                
                contenidoAnterior.classList.remove('show');
                iconoAnterior.classList.remove('rotated');
                cardAnterior.classList.remove('active');
                
                // Abrir el nuevo
                contenido.classList.add('show');
                icono.classList.add('rotated');
                card.classList.add('active');
                conceptoAbierto = numero;
                
                // Scroll suave al card
                card.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
            // Si ninguno está abierto, abrir este
            else {
                contenido.classList.add('show');
                icono.classList.add('rotated');
                card.classList.add('active');
                conceptoAbierto = numero;
                
                // Scroll suave al card
                card.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
        
        // Abrir el primer concepto por defecto
        document.addEventListener('DOMContentLoaded', function() {
            toggleConcepto(1);
        });
        
        // Prevenir que el click en el contenido cierre el acordeón
        document.querySelectorAll('.contenido-interno').forEach(contenido => {
            contenido.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });
    </script>
</body>
</html>