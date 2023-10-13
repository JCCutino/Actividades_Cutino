<?php

require_once 'JSerializable.php';
//Creamos una clase abstracta que tambien herede los métodos de JSerializable
abstract class Persona implements JSerializable {
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
    //Moficamos los métodos usando json_encode
    public function toJSON(): string {
        foreach ($this as $clave => $valor) {
            $mapa->$clave = $valor;
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string {
        return serialize($this);
    }
}

?>