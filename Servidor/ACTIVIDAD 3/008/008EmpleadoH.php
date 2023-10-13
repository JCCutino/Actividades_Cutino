<?php

require '008PersonaH.php';
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

     
       public function getTelefonos(): array {
        return $this->telefonos;
       }


     // Método estático para convertir la información de un empleado a formato HTML

        public static function toHtml(Persona $p): string {

            if ($p instanceof Empleado) { //Si la persona es un empleado mostramos todos los datos
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
        return ""; //Si no es un empleado no mostramos nada
        }
    }

    


 //Creamos 2 empleados
$empleado1 = new Empleado("Juan", "Cutino Cortacero");
echo Empleado::toHtml($empleado1);

$empleado2 = new Empleado("Samuel", "Castro Barranca", 2500, ["675382191", "657345987"]);

//Cambiamos el sueldo tope
Empleado::setSueldoTope(4327);
echo Empleado::toHtml($empleado2);

//Creamos una persona
$persona1 = new Persona("Luis", "Verga Mayor");

echo Empleado::toHtml($persona1);
?>