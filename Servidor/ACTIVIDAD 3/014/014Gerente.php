<?php
require_once '014Trabajador.php';
require_once 'JSerializable.php';
              

class Gerente extends Trabajador implements JSerializable {
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
        return parent::toHtml() . "<br>" . "Salario Base: " . $this->salarioBase . "<br>";
    }
}