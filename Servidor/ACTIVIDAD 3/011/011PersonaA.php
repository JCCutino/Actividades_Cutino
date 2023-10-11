<?php
/*Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método estático toHtml(Persona $p) tenga que ser redefinido en todos sus hijos.
 
*/
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
?>