<?php
/*Copia la clase del ejercicio anterior y modifícala. Cambia la constante por una variable estática sueldoTope, de manera que mediante getter/setter puedas modificar su valor.*/

class Empleado {
    protected static float $sueldoTope = 3333;

    public function __construct(
        protected string $nombre, 
        protected string $apellidos, 
        protected float $sueldo = 1000, 
        protected array $telefonos = []
    ) {}

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    public function comprobarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
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
}


$empleado1 = new Empleado("Juan", "Cutino Cortacero");
echo "Nombre completo 1: " . $empleado1->getNombreCompleto() . "<br>";
echo "Sueldo 1: " . $empleado1->getSueldo() . "<br>";
echo "Impuestos 1: " . ($empleado1->comprobarImpuestos() ? "Sí" : "No") . "<br><br>";

$empleado2 = new Empleado("Samuel", "Castro Barranca", 2500, ["675382191", "657345987"]);
echo "Nombre completo 2: " . $empleado2->getNombreCompleto() . "<br>";
echo "Sueldo 2: " . $empleado2->getSueldo() . "<br>";
echo "Telefonos 2: " . $empleado2->listarTelefonos() . "<br>";
echo "Impuestos 2: " . ($empleado2->comprobarImpuestos() ? "Sí" : "No") . "<br>";


Empleado::setSueldoTope(4327);

echo "Nuevo Sueldo Tope: " . Empleado::getSueldoTope() . "<br>";

?>