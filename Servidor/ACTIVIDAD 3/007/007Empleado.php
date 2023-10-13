<?php
require '007Persona.php';

class Empleado extends Persona {

    //Creamos una variable estática para el sueldo topo
    protected static float $sueldoTope = 3333;

    //Creamos un constructor con los atributos heredados de persona
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
    
    // Método para añadir un teléfono a la lista

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }
    // Método para listar los teléfonos

    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

        // Método para vaciar la lista de teléfonos

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    
    // Método para comprobar si el sueldo supera el umbral de impuestos

    public function comprobarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope;
    }


    //Metodo para obtener el sueldo
    public function getSueldo(): float {
        return $this->sueldo;
    }


    //Metodo para obtener y cambiar el sueldo tope
    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $sueldoTope): void {
        self::$sueldoTope = $sueldoTope;
    }

     //Metodo paa obtener los telefonos 
       public function getTelefonos(): array {
        return $this->telefonos;
       }

           // Método estático para convertir la información de un empleado a formato HTML

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



// Creamos una instancia de la clase Empleado sin especificar sueldo ni teléfonos

$empleado1 = new Empleado("Juan", "Cutino Cortacero");
echo Empleado::toHtml($empleado1);
// Creamos una instancia de la clase Empleado con sueldo y teléfonos especificados

$empleado2 = new Empleado("Samuel", "Castro Barranca", 2500, ["675382191", "657345987"]);

Empleado::setSueldoTope(4327);
echo Empleado::toHtml($empleado2);

?>