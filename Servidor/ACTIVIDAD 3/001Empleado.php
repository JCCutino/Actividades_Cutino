<?php
/*Crea una clase Empleado con su nombre, apellidos y sueldo. Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando el sueldo es superior a 3333€) → debePagarImpuestos(): bool
*/
class Empleado{


public function __construct(
    protected String $nombre,
    protected String $apellidos,
    protected float $sueldo
    ){}

public function getNombreCompleto():String{
$nombreCompleto = $this->nombre." ".$this->apellidos;
    return $nombreCompleto;
}

public function comprobarImpuestos():bool{
if ($this->sueldo>3333) {
   return true;
} else {
   return false;
}

}

public function getNombre(){
return $this->nombre;
}

public function setNombre($nombre){
$this->nombre = $nombre;
return $this;
}


public function getApellidos(){
return $this->apellidos;
}


public function setApellidos($apellidos){
$this->apellidos = $apellidos;
return $this;
}

 
public function getSueldo(){
return $this->sueldo;
}

public function setSueldo($sueldo){
$this->sueldo = $sueldo;
return $this;
}


}

$empleado1 = new Empleado("Juan", "Cutino Cortacero", 47000);

echo $empleado1->getNombreCompleto();

?>