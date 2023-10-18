<?php
/*Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método estático toHtml(Persona $p) tenga que ser redefinido en todos sus hijos.
 
*/
//Creamos una clase abstacta
abstract class Persona {

    //Creamos un constructor para la persona
    public function __construct(
        protected string $nombre, 
        protected string $apellidos,
        protected int $edad
    ) {}

    //Creamos una funcion abstracta 
    abstract public function toHtml(): string;

    //Creamos todos los getters
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
        return $this->toHtml();
    }
}

?>