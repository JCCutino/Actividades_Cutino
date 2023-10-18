<?php
require '012Trabajador.php';
//Creamos una clase Empleado hija de Trabajador
class Empleado extends Trabajador {
    
 //Creamos un constructor heredando los atributos
    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int $edad,
        protected float $sueldoPorHora,
        protected int $horasTrabajadas,
        protected array $telefonos = []
    ) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->sueldoPorHora = $sueldoPorHora;
        $this->horasTrabajadas = $horasTrabajadas;
    }
//Creamos una funcion para calcular el sueldo del empleado 
    public function calcularSueldo(): float {
        return $this->sueldoPorHora * $this->horasTrabajadas;
    }
}


$empleado = new Empleado("Juan", "Cutino Cortacero", 20, 17.5, 160);
echo "Sueldo de Empleado: " . $empleado->calcularSueldo() . "€";


?>