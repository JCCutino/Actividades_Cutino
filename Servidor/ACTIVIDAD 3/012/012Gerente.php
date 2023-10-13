<?php
require '012Trabajador.php';

//Creamos una clase Gerente hija de Trabajador
class Gerente extends Trabajador {
    
    //Creamos un constructor heredando los atributos
    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int $edad,
        protected float $salarioBase,
        protected array $telefonos = []
    ) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->salarioBase = $salarioBase;
    }
    //Creamos una funcion para calcular el sueldo del gerente 
    public function calcularSueldo(): float {
        
        $porcentajeIncremento = $this->edad * 0.01;
        $sueldoIncrementado = $this->salarioBase + ($this->salarioBase * $porcentajeIncremento);
        return $sueldoIncrementado;
    }
}

//Creamos y mostramos los datos del gerente
$gerente = new Gerente("Samuel", "Castro Barranca", 35, 5000);
echo "Sueldo de Gerente: " . $gerente->calcularSueldo() . "€";
?>