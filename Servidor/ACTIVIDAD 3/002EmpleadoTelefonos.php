<?php
/*Copia la clase del ejercicio anterior y modifícala. Añade una propiedad privada que almacene un array de números de teléfonos. Añade los siguientes métodos:
public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
public function listarTelefonos(): string → Muestra los teléfonos separados por comas
public function vaciarTelefonos(): void → Elimina todos los teléfonos
*/

class Empleado {
   

    public function __construct(
        protected string $nombre, 
        protected string $apellidos, 
        protected float $sueldo, 
        protected array $telefonos) 
    {}

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    public function comprobarImpuestos(): bool {
        return $this->sueldo > 3333;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): void {
        $this->sueldo = $sueldo;
    }
}

$empleado1 = new Empleado("Juan", "Cutino Cortacero", 47000, ["675382191"]);

echo "Nombre completo: " . $empleado1->getNombreCompleto() . "<br>";
echo "Telefonos: " . $empleado1->listarTelefonos() . "<br>";

$empleado1->anyadirTelefono(657345987);
echo "Telefonos después de añadir uno: " . $empleado1->listarTelefonos() . "<br>";

$empleado1->vaciarTelefonos();
echo "Telefonos después de vaciar: " . $empleado1->listarTelefonos() . "<br>";

echo "Impuestos: " . ($empleado1->comprobarImpuestos() ? "Sí" : "No") . "<br>";
?>