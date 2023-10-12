<?php
/*Utilizando las clases de los ejercicios anteriores:
Crea una clase Empresa que además del nombre y la dirección, contenga una propiedad con un array de Trabajadores, ya sean Empleados o Gerentes.
Añade getters/setters para el nombre y dirección.
Añade métodos para añadir y listar los trabajadores.
public function anyadirTrabajador(Trabajador $t)
public function listarTrabajadoresHtml() : string -> utiliza Trabajador::toHtml(Persona $p)
Añade un método para obtener el coste total en nóminas.
public function getCosteNominas(): float -> recorre los trabajadores e invoca al método calcularSueldo().
*/

require_once '013Empleado.php';
require_once '013Gerente.php';

class Empresa {
    private string $nombre;
    private string $direccion;
    private array $trabajadores = [];

    public function __construct(string $nombre, string $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

   
    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    
    public function anyadirTrabajador(Trabajador $trabajador): void {
        $this->trabajadores[] = $trabajador;
    }

    public function listarTrabajadoresHtml(): string {
        $html = '<ul>';
        foreach ($this->trabajadores as $trabajador) {
            $html .= '<li>' . $trabajador->toHtml() . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }

    
    public function getCosteNominas(): float {
        $costeTotal = 0.0;
        foreach ($this->trabajadores as $trabajador) {
            $costeTotal += $trabajador->calcularSueldo();
        }
        return $costeTotal;
    }
}


$empresa = new Empresa("Red Royal", "Calle Falsa 123");

$empleado = new Empleado("Juan", "Cutiño", 20, 15.0, 160);
$gerente = new Gerente("Samuel", "Castro", 35, 3000);

$empresa->anyadirTrabajador($empleado);
$empresa->anyadirTrabajador($gerente);

echo "<br> Nombre de la empresa: " . $empresa->getNombre() . "<br>";
echo "Dirección de la empresa: " . $empresa->getDireccion() . "<br>";

echo "Trabajadores de la empresa: <br>";
echo $empresa->listarTrabajadoresHtml();

echo "Coste total en nóminas: " . $empresa->getCosteNominas() . "€";

?>