<?php
/*Copia la clase del ejercicio anterior y modifícala. Añade una propiedad privada que almacene un array de números de teléfonos. Añade los siguientes métodos:
public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
public function listarTelefonos(): string → Muestra los teléfonos separados por comas
public function vaciarTelefonos(): void → Elimina todos los teléfonos
*/
class Empleado {
   
    // Creamos un constructor para la clase
    public function __construct(
        protected string $nombre, 
        protected string $apellidos, 
        protected float $sueldo, 
        protected array $telefonos) 
    {}

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

    // Métodos para obtener y establecer el nombre
    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    // Métodos para obtener y establecer los apellidos
    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    // Métodos para obtener y establecer el sueldo
    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): void {
        $this->sueldo = $sueldo;
    }
}

// Creamos una instancia de la clase Empleado con algunos datos iniciales
$empleado1 = new Empleado("Juan", "Cutino Cortacero", 47000, ["675382191"]);

// Imprimimos los resultados
echo "Nombre completo: " . $empleado1->getNombreCompleto() . "<br>";
echo "Teléfonos: " . $empleado1->listarTelefonos() . "<br>";

// Añadimos un teléfono
$empleado1->anyadirTelefono(657345987);
//Mostramos los teléfonos
echo "Teléfonos después de añadir uno: " . $empleado1->listarTelefonos() . "<br>";

// Vaciamos la lista de teléfonos
$empleado1->vaciarTelefonos();
echo "Teléfonos después de vaciar: " . $empleado1->listarTelefonos() . "<br>";

// Comprobamos si el sueldo supera el umbral e imprimimos el resultado
echo "Impuestos: " . ($empleado1->comprobarImpuestos() ? "Sí" : "No") . "<br>";
?>