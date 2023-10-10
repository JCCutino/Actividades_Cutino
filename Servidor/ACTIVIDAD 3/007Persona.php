<?php
/*Copia la clase del ejercicio anterior en 307Empleado.php y modifícala.Crea una clase Persona que sea padre de Empleado, de manera que Persona contenga el nombre y los apellidos, y en Empleado quede el salario y los teléfonos.*/

class Persona {
   

    public function __construct(
        protected string $nombre, 
        protected string $apellidos
        ) {}

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }
}

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

        public static function toHtml(Empleado $emp): string {
            $info = "<p>";
            $info .= "<strong>Nombre completo:</strong> " . $emp->getNombreCompleto() . "<br>";
            $info .= "<strong>Sueldo:</strong> " . $emp->getSueldo() . "<br>";
            $info .= "<strong>Impuestos:</strong> " . ($emp->comprobarImpuestos() ? "Sí" : "No") . "<br>";
    
            
            $telefonos = $emp->getTelefonos();
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
    }




$empleado1 = new Empleado("Juan", "Cutino Cortacero");
echo Empleado::toHtml($empleado1);

$empleado2 = new Empleado("Samuel", "Castro Barranca", 2500, ["675382191", "657345987"]);

Empleado::setSueldoTope(4327);
echo Empleado::toHtml($empleado2);


?>