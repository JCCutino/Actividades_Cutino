<?php
require_once '013Trabajador.php';
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
//Creamos una funcion para mostrar todos los datos del Empleado
    public function toHtml(): string {
        return parent::toHtml() . "<br>" . "Sueldo por Hora: " . $this->sueldoPorHora . "<br>" . "Horas Trabajadas: " . $this->horasTrabajadas . "<br>";
    }
}

//Creamos un empleado
$empleado = new Empleado("Juan", "Cutino Cortacero", 20, 17.5, 160);


$html = $empleado->toHtml();
//Mostramos todos los datos del 
echo $html;
echo "Sueldo de Empleado: " . $empleado->calcularSueldo() . "€";
?>