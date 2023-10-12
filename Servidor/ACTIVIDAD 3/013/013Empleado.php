<?php
require_once '013Trabajador.php';

class Empleado extends Trabajador {
    protected float $sueldoPorHora;
    protected int $horasTrabajadas;

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad,
        float $sueldoPorHora,
        int $horasTrabajadas,
        array $telefonos = []
    ) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->sueldoPorHora = $sueldoPorHora;
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function calcularSueldo(): float {
        return $this->sueldoPorHora * $this->horasTrabajadas;
    }

    public function toHtml(): string {
        return parent::toHtml() . "<br>" . "Sueldo por Hora: " . $this->sueldoPorHora . "<br>" . "Horas Trabajadas: " . $this->horasTrabajadas . "<br>";
    }
}


$empleado = new Empleado("Juan", "Cutino Cortacero", 20, 17.5, 160);


$html = $empleado->toHtml();

echo $html;
echo "Sueldo de Empleado: " . $empleado->calcularSueldo() . "€";
?>