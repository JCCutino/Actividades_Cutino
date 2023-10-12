<?php
/*Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: salario + salario*edad/100
*/
require '012Persona.php';
abstract class Trabajador extends Persona {
  
    protected static float $sueldoTope = 3333;
    
    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int $edad,
        protected array $telefonos = []
    ) {}

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    abstract public function calcularSueldo(): float;

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }
}

?>