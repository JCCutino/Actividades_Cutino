<?php
/*Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código necesario para mostrar y/o editar la edad cuando sea necesario.
*/
class Persona {
   

    //Creamos un constructor par la clase Persona
    public function __construct(
        protected string $nombre, 
        protected string $apellidos
        ) {}

        //Creamos los getters
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

?>