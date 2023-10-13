<?php
require_once '014Persona.php';
require_once 'JSerializable.php';
abstract class Trabajador extends Persona implements JSerializable {
    protected static float $sueldoTope = 3333;

    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int $edad,
        protected array $telefonos = []
    ) {
        parent::__construct($nombre, $apellidos, $edad);
    }

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
        return "<br>" . "Nombre completo: " . $this->getNombreCompleto() . "<br>" . " Edad: " . $this->edad;
    }
}


?>