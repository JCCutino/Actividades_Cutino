<?php
/*Copia la clase del ejercicio anterior y modifícala. Elimina los setters de nombre y apellidos, de manera que dichos datos se asignan mediante el constructor (utiliza la sintaxis de PHP8). Si el constructor recibe un tercer parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo inicial.*/

class Empleado {
    
    // Creamos un constructor de la clase con valor sueldo predeterminados
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

    // Método para comprobar si el sueldo supera un umbral
    public function comprobarImpuestos(): bool {
        return $this->sueldo > 3333;
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
}

// Creamos una instancia de la clase Empleado sin especificar sueldo ni teléfonos
$empleado1 = new Empleado("Juan", "Cutino Cortacero");
echo "Nombre completo 1: " . $empleado1->getNombreCompleto() . "<br>";
echo "Sueldo 1: " . $empleado1->getSueldo() . "<br><br>";

// Creamos una instancia de la clase Empleado con sueldo y teléfonos especificados
$empleado2 = new Empleado("Samuel", "Castro Barranca", 2500, ["675382191", "657345987"]);
echo "Nombre completo 2: " . $empleado2->getNombreCompleto() . "<br>";
echo "Sueldo 2: " . $empleado2->getSueldo() . "<br>";
echo "Teléfonos 2: " . $empleado2->listarTelefonos() . "<br>";

?>