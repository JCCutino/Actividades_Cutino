<?php

require '009PersonaE.php';

class Empleado extends Persona {

     //Creamos una variable estática para el sueldo topo
    protected static float $sueldoTope = 3333;

    //Creamos un constructor con los atributos heredados de persona y tambien añadimos el atributo edad

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

    
    //Creamos un metodo para comprobar si el usuario tiene que pagar impuestos basado en el sueldo tope y su edad
    public function comprobarImpuestos(): bool {
      
        return $this->sueldo > self::$sueldoTope && $this->edad >=21;
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

        // Método estático para convertir la información de un empleado a formato HTML
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

    

 //Creamos 2 empleados

$empleado1 = new Empleado("Juan", "Cutino Cortacero", 20, 5000);
echo Empleado::toHtml($empleado1);

$empleado2 = new Empleado("Samuel", "Castro Barranca", 23, 2500, ["675382191", "657345987"]);

//Cambiamos el sueldo tope
Empleado::setSueldoTope(4327);
echo Empleado::toHtml($empleado2);

//Creamos una persona
$persona1 = new Persona("Luis", "Verga Mayor", 19);

echo Empleado::toHtml($persona1);

?>
