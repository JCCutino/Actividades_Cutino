<?php
/*Copia las clases del ejercicio anterior y modifícalas. Crea en Persona el método estático toHtml(Persona $p), y modifica en Empleado el mismo método toHtml(Persona $p), pero cambia la firma para que reciba una Persona como parámetro. Para acceder a las propiedades del empleado con la persona que recibimos como parámetro, comprobaremos su tipo:

<?php
class Empleado extends Persona {
    /// resto del código
    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {
            // Aquí ya podemos acceder a las propiedades
// y métodos de Empleado
        }
    }
}
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