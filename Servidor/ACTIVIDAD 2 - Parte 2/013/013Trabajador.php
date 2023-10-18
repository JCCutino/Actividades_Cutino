<?php
require_once '013Persona.php';

//Creamos otra clase abstracta hija de Persona
abstract class Trabajador extends Persona {
  
    protected static float $sueldoTope = 3333;
    //Creamos un constructor de la clase persona
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
    //Creamos la funcion toHTML que mostrará los datos del trabajador
    public function toHtml(): string {
        return "<br>"."Nombre completo: " . $this->getNombreCompleto() . "<br>" . " Edad: " . $this->edad;

    }
}


?>