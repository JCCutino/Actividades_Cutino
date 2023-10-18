<?php
require_once '014Trabajador.php';
require_once 'JSerializable.php';
              
//Creamos una clase Gerente que sea hija de Trabajador y tambien obtenga los JSerializable
class Gerente extends Trabajador implements JSerializable {
    
//Creamos el constructor heredando los atributos de trabajador
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
//Creamos la funcion para calcular el sueldo del gerente
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
//Creamos la funcion para mostrar los datos extras del gerente
    public function toHtml(): string {
        return parent::toHtml() . "<br>" . "Salario Base: " . $this->salarioBase . "<br>";
    }
}