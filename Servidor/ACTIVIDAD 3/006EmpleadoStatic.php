<?php
/*Copia la clase del ejercicio anterior y modifícala. Completa el siguiente método con una cadena HTML que muestre los datos de un empleado dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello, deberás crear un getter para los teléfonos):

public static function toHtml(Empleado $emp): string
*/
class Empleado {
    protected static float $sueldoTope = 3333;

    // Propiedades de la clase
    public function __construct(
        protected string $nombre, 
        protected string $apellidos, 
        protected float $sueldo = 1000, 
        protected array $telefonos = []
    ) {}

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

    // Método para obtener el nombre completo
    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    // Método para comprobar si el sueldo supera el umbral de impuestos
    public function comprobarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope;
    }

    // Métodos para obtener el nombre, apellidos y sueldo
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    // Métodos estáticos para obtener y establecer el tope de sueldo
    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $sueldoTope): void {
        self::$sueldoTope = $sueldoTope;
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

// Cambiamos el valor de la propiedad estática $sueldoTope
Empleado::setSueldoTope(4327);
echo Empleado::toHtml($empleado2);


?>