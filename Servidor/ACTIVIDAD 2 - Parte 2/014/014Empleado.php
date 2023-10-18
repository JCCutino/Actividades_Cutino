<?php
require_once '014Trabajador.php';
require_once 'JSerializable.php';
//Creamos una clase Empleado que sea hija de Trabajador y tambien obtenga los JSerializable
class Empleado extends Trabajador implements JSerializable {
    
//Creamos el constructor heredando los atributos de trabajador
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
//Creamos la función toHtml para mostrar los datos del Trabajador y del Empleado
    public function toHtml(): string {
        return parent::toHtml() . "<br>" . "Sueldo por Hora: " . $this->sueldoPorHora . "<br>" . "Horas Trabajadas: " . $this->horasTrabajadas . "<br>";
    }
}
?>