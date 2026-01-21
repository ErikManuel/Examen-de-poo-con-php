# 🏆 Examen POO - Implementación Completa en Laravel 10

## 📋 Descripción
Implementación profesional de los **7 conceptos principales de Programación Orientada a Objetos** con Laravel 10. Interfaz web interactiva que demuestra cada concepto con ejemplos de código reales.

## 🎨 Los 7 Conceptos Implementados
1. **Constructor** - Inicialización de objetos con valores por defecto
2. **Método** - Comportamientos y acciones de los objetos
3. **Herencia** - Reutilización y extensión de funcionalidad
4. **Excepción** - Manejo elegante de errores
5. **Interfaz** - Contratos que deben cumplir las clases
6. **Clase Abstracta** - Plantillas para clases hijas
7. **This vs Super** - Diferencias entre instancia actual y clase padre

## 🚀 Instalación Rápida

### Prerrequisitos:
- PHP 8.1+
- Composer 2.0+
- Git

### Paso a Paso:

```bash
# 1. Clonar repositorio
git clone https://github.com/tu-usuario/examen-poo-laravel.git
cd examen-poo-laravel

# 2. Instalar dependencias
composer install

# 3. Configurar entorno
cp .env.example .env
php artisan key:generate

# 4. Configurar SQLite (más simple)
echo "DB_CONNECTION=sqlite" >> .env
touch database/database.sqlite

# 5. Ejecutar migraciones
php artisan migrate

# 6. Iniciar servidor
php artisan serve
Acceder a la aplicación:
🌐 URL: http://localhost:8000

🖥️ Cómo Usar la Aplicación
Interfaz Principal: Verás 7 tarjetas (una por concepto)

Click en ENCABEZADO: Expande/contrae cada concepto

Contenido de cada concepto:

📖 Definición - Explicación conceptual

💡 Teoría - Fundamentos teóricos

💻 Ejemplo de código - Implementación real en Laravel

🏷️ Keywords - Términos clave relacionados

Características UI:
✅ Solo un concepto abierto a la vez

✅ Scroll interno en contenido largo

✅ Click solo en encabezados

✅ Código con sintaxis resaltada

✅ Diseño responsive (móvil/desktop)

📁 Estructura del Proyecto
text
examen-poo-laravel/
├── app/
│   ├── Http/Controllers/DemostracionController.php
│   ├── Models/Examen.php                    # Constructor
│   ├── Models/Pregunta.php
│   └── Exceptions/ExamenExcepcion.php       # Excepción personalizada
├── database/
│   ├── migrations/                          # Tablas examens/preguntas
│   └── factories/ExamenFactory.php
├── resources/views/demostracion.blade.php   # Vista principal
├── routes/web.php                           # Rutas
└── README.md
🔍 Ejemplos de Código por Concepto
1. Constructor
php
// app/Models/Examen.php
public function __construct(array $attributes = [])
{
    parent::__construct($attributes);
    $this->modalidad = $attributes['modalidad'] ?? 'FAST_TRACK';
    $this->duracion_minutos = $attributes['duracion_minutos'] ?? 60;
    if (empty($this->codigo)) {
        $this->codigo = \Illuminate\Support\Str::uuid();
    }
}
2. Herencia
php
abstract class PreguntaBase {
    abstract public function calcularDificultad(): float;
}

class PreguntaTeorica extends PreguntaBase {
    public function calcularDificultad(): float {
        return $this->puntos * 1.5;
    }
}
3. This vs Super
php
class ClaseDerivada extends ClaseBase {
    public function demostrar(): array {
        return [
            'this->propiedad' => $this->propiedad,      // Instancia actual
            'parent::metodo()' => parent::metodo()      // Clase padre
        ];
    }
}
🧪 Comandos de Verificación
bash
# Verificar instalación
php artisan --version
php artisan route:list
php artisan migrate:status

# Limpiar cache (si hay problemas)
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Probar API (opcional)
curl http://localhost:8000/api/demostracion-poo
🐛 Solución de Problemas
Error de conexión MySQL:
bash
# Usar SQLite:
echo "DB_CONNECTION=sqlite" >> .env
touch database/database.sqlite
php artisan migrate
"Class not found":
bash
composer dump-autoload
Puerto 8000 en uso:
bash
php artisan serve --port=8080
# Acceder a: http://localhost:8080
🎯 Para el Evaluador
Criterios de Evaluación:
✅ Constructor: Valores por defecto, inicialización

✅ Método: Estáticos vs instancia, fábricas

✅ Herencia: Jerarquía correcta, abstract/concrete

✅ Excepción: Personalizada, con contexto

✅ Interfaz: Múltiples, implementación correcta

✅ Clase Abstracta: Template Method Pattern

✅ This vs Super: Diferenciación clara

Verificación Rápida:
Todos los 7 conceptos visibles ✓

Click en encabezados funciona ✓

Scroll en contenido largo ✓

Solo un concepto abierto a la vez ✓

Código con sintaxis legible ✓

📊 Stack Tecnológico
Backend: Laravel 10, PHP 8.1+

Database: MySQL 5.7+ / SQLite 3.x

Frontend: Bootstrap 5, JavaScript Vanilla

Servidor: PHP Built-in Server

📄 Licencia
MIT License - Ver archivo LICENSE para detalles.

👨‍💻 Autor
Tu Nombre
🔗 GitHub: @ErikManuel

⭐ Si este proyecto te fue útil, ¡dale una estrella en GitHub!

🔗 Repositorio: https://github.com/tu-usuario/examen-poo-laravelhttps://github.com/ErikManuel/Examen-de-poo-con-php
🌐 Demo Local: http://localhost:8000 (después de instalar)

🎉 ¡Gracias por evaluar mi implementación del examen POO!
