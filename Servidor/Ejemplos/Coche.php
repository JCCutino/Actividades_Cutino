<?php
class Coche{
    private int $ruedas=4;
    private String $color;
    private bool $marcha;
    private String $modelo;
    private String $marca;
    private String $matricula;
    private float $potencia ;
    private int $puertas;

    public function __construct($ruedas, $color, $marcha, $modelo,  $marca, $potencia, $puertas) {
        $this->ruedas = $ruedas;
        $this->color = $color;
        $this->marcha = $marcha;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->potencia = $potencia;
        $this->puertas = $puertas;
    }
    public function imprimir(){



        echo "Ruedas: ".$this->ruedas;
        echo "<br>";
        echo "Color: ".$this->color;
        echo "<br>";
        $tipoMarcha = ($this->marcha == true) ? "Automático" : "De marcha";
        echo "Marcha: ".$tipoMarcha;
        echo "<br>";
        echo "Modelo: ".$this->modelo;
        echo "<br>";
        echo "Marca: ".$this->marca;
        echo "<br>";
        echo "Potencia: ".$this->potencia;
        echo "<br>";
        echo "Puertas: ".$this->puertas;
        echo "<br>";
        echo "<br>";

    }

    public function setColor(String $color){
    $this ->color=$color;
    }
}

$clio= new Coche(4,"Negro",true,"Clio","Renault",150,5);

$clio->imprimir();

$clio->setColor("Blanco");

$clio->imprimir();


?>