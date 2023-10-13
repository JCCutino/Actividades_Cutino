<?php
/*Copia la clase del ejercicio anterior y modifícala. Cambia la constante por una variable estática sueldoTope, de manera que mediante getter/setter puedas modificar su valor.*/
class Empleado {
    // Creamos una variable estática que representa el tope de sueldo para comprobar impuestos
    protected static float $sueldoTope = 3333;

    // Creamos un constructor para la clase
    public function __construct(
        protected string $nombre, 
        protected string $apellidos, 
        protected float $sueldo = 1000, 
        protected array $telefonos = []
    ) {}

    // Método para añadir un teléfono a la lista
    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    // Método para listar los teléfonos
    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    // Método para vaciar la lista de teléfonos
    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    // Método para obtener el nombre completo
    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    // Método para comprobar si el sueldo supera el umbral de impuestos
    public function comprobarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope;
    }

    // Métodos para obtener el nombre, apellidos y sueldo
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    // Métodos estáticos para obtener y establecer el tope de sueldo
    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $sueldoTope): void {
        self::$sueldoTope = $sueldoTope;
    }
}

// Creamos una instancia de la clase Empleado sin especificar sueldo ni teléfonos
$empleado1 = new Empleado("Juan", "Cutino Cortacero");
echo "Nombre completo 1: " . $empleado1->getNombreCompleto() . "<br>";
echo "Sueldo 1: " . $empleado1->getSueldo() . "<br>";
echo "Impuestos 1: " . ($empleado1->comprobarImpuestos() ? "Sí" : "No") . "<br><br>";

// Creamos una instancia de la clase Empleado con sueldo y teléfonos especificados
$empleado2 = new Empleado("Samuel", "Castro Barranca", 2500, ["675382191", "657345987"]);
echo "Nombre completo 2: " . $empleado2->getNombreCompleto() . "<br>";
echo "Sueldo 2: " . $empleado2->getSueldo() . "<br>";
echo "Teléfonos 2: " . $empleado2->listarTelefonos() . "<br>";
echo "Impuestos 2: " . ($empleado2->comprobarImpuestos() ? "Sí" : "No") . "<br>";

// Cambiamos el valor de la propiedad estática $sueldoTope
Empleado::setSueldoTope(4327);

// Imprimimos el nuevo valor de $sueldoTope
echo "Nuevo Sueldo Tope: " . Empleado::getSueldoTope() . "<br>";


?>