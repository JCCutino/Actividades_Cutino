<?php
require_once '014Trabajador.php';
require_once 'JSerializable.php';

class Empleado extends Trabajador implements JSerializable {
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

    public function toJSON(): string {
        foreach ($this as $clave => $valor) {
            $mapa->$clave = $valor;
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string {
        return serialize($this);
    }

    public function toHtml(): string {
        return parent::toHtml() . "<br>" . "Sueldo por Hora: " . $this->sueldoPorHora . "<br>" . "Horas Trabajadas: " . $this->horasTrabajadas . "<br>";
    }
}
?>