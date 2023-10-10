<?php

require '008PersonaH.php';
class Empleado extends Persona {
    protected static float $sueldoTope = 3333;

    public function __construct(
        protected string $nombre, 
        protected string $apellidos, 
        protected float $sueldo = 1000, 
        protected array $telefonos = []
    ) {
        parent::__construct($nombre, $apellidos);
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
        return $this->sueldo > self::$sueldoTope;
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

        public static function toHtml(Persona $p): string {

            if ($p instanceof Empleado) {
            $info = "<p>";
            $info .= "<strong>Nombre completo:</strong> " . $p->getNombreCompleto() . "<br>";
            $info .= "<strong>Sueldo:</strong> " . $p->getSueldo() . "<br>";
            $info .= "<strong>Impuestos:</strong> " . ($p->comprobarImpuestos() ? "Sí" : "No") . "<br>";
    
            
            $telefonos = $p->getTelefonos();
            if (!empty($telefonos)) {
                $info .= "<strong>Telefonos:</strong> <ol>";
                foreach ($telefonos as $telefono) {
                    $info .= "<li>$telefono</li>";
                }
                $info .= "</ol>";
            }
    
            $info .= "</p>";
            return $info;
        }
        return "";
        }
    }

    



$empleado1 = new Empleado("Juan", "Cutino Cortacero");
echo Empleado::toHtml($empleado1);

$empleado2 = new Empleado("Samuel", "Castro Barranca", 2500, ["675382191", "657345987"]);

Empleado::setSueldoTope(4327);
echo Empleado::toHtml($empleado2);

$persona1 = new Persona("Luis", "Verga Mayor");

echo Empleado::toHtml($persona1);
?>