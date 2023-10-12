<?php
require_once '013Trabajador.php';


class Gerente extends Trabajador {
    protected float $salarioBase;

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad,
        float $salarioBase,
        array $telefonos = []
    ) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->salarioBase = $salarioBase;
    }

    public function calcularSueldo(): float {
        
        $porcentajeIncremento = $this->edad * 0.01;
        $sueldoIncrementado = $this->salarioBase + ($this->salarioBase * $porcentajeIncremento);
        return $sueldoIncrementado;
    }

    public function toHtml(): string {
        return parent::toHtml() . "<br>" . "Salario Base: ".$this->salarioBase . "<br>";
    }
}


$gerente = new Gerente("Samuel", "Castro Barranca", 35, 5000);

$html = $gerente->toHtml();

echo $html;

echo "Sueldo de Gerente: " . $gerente->calcularSueldo() . "€";
?>