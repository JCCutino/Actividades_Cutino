<?php
/*Crea una clase Empleado con su nombre, apellidos y sueldo. Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando el sueldo es superior a 3333€) → debePagarImpuestos(): bool
*/
class Empleado {

    // Creamos un constructor para la clase
    public function __construct(
        protected String $nombre,
        protected String $apellidos,
        protected float $sueldo
    ) {}

    // Método para obtener el nombre completo
    public function getNombreCompleto(): String {
        $nombreCompleto = $this->nombre . " " . $this->apellidos;
        return $nombreCompleto;
    }

    // Método para comprobar si el sueldo supera un umbral
    public function comprobarImpuestos(): bool {
        if ($this->sueldo > 3333) {
            return true;
        } else {
            return false;
        }
    }

    // Métodos para obtener y establecer el nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    // Métodos para obtener y establecer los apellidos
    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
        return $this;
    }

    // Métodos para obtener y establecer el sueldo
    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
        return $this;
    }

}

// Creamos una instancia de la clase Empleado
$empleado1 = new Empleado("Juan", "Cutino Cortacero", 47000);

// Imprimimos el nombre completo del empleado
echo $empleado1->getNombreCompleto();


?>