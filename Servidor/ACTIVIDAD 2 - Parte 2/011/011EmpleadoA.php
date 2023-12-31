<?php
require '011PersonaA.php';

class Empleado extends Persona {

    protected static float $sueldoTope = 3333;

    //Creamos el constructor 
    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int $edad,
        protected float $sueldo = 1000,
        protected array $telefonos = []
    ) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
        $this->telefonos = $telefonos;
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

    public function comprobarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope && $this->edad >= 21;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $sueldoTope): void {
        self::$sueldoTope = $sueldoTope;
    }

    public function getTelefonos(): array {
        return $this->telefonos;
    }

    // Creamos la función toHtml()
    public function toHtml(): string {
        $info = "<p>";
        $info .= "<strong>Nombre completo:</strong> " . $this->getNombreCompleto() . "<br>";
        $info .= "<strong>Edad:</strong> " . $this->edad . "<br>";
        $info .= "<strong>Sueldo:</strong> " . $this->sueldo . "<br>";
        $info .= "<strong>Impuestos:</strong> " . ($this->comprobarImpuestos() ? "Sí" : "No") . "<br>";

        $telefonos = $this->getTelefonos();
        if (!empty($telefonos)) {
            $info .= "<strong>Teléfonos:</strong> <ol>";
            foreach ($telefonos as $telefono) {
                $info .= "<li>$telefono</li>";
            }
            $info .= "</ol>";
        }

        $info .= "</p>";
        return $info;
    }
}

$empleado1 = new Empleado("Juan", "Cutino Cortacero", 20, 5000);
echo $empleado1;

$empleado2 = new Empleado("Samuel", "Castro Barranca", 23, 2500, ["675382191", "657345987"]);
Empleado::setSueldoTope(4327);
echo $empleado2;

?>