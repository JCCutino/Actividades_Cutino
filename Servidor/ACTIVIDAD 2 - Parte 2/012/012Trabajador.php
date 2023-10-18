<?php

require '012Persona.php';

//Creamos otra clase abstracta hija de Persona
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
    //Creamos un funcion abstracta 
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