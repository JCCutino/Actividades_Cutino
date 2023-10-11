<?php
/*Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las clases Persona y Empleado, de forma similar a los realizados en HTML, pero sin que sean estáticos, de manera que obtenga los datos mediante $this.

function public __toString(): string
*/

class Persona {
   

    public function __construct(
        protected string $nombre, 
        protected string $apellidos,
        protected int $edad
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

    public function __toString(): string {
        $info = "<p>";
        $info .= "<strong>Nombre completo:</strong> " . $this->getNombreCompleto() . "<br>";
        $info .= "<strong>Edad:</strong> " . $this->edad . "<br>";
        $info .= "</p>";
        return $info;
    }
}

?>