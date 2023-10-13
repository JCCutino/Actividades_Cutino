<?php
//Creamos un interfaz inicializando las 2 funciones
interface JSerializable {
    public function toJSON(): string;
    public function toSerialize(): string;
}
?>