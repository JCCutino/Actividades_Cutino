<?php
/*Copia las clases del ejercicio anterior y modifícalas.

Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como tenemos las propiedades de los objetos privados, debes recorrer las propiedades y colocarlas en un mapa. Por ejemplo:

<?php
public function toJSON(): string {
    foreach ($this as $clave => $valor) {
        $mapa->$clave = $valor;
    }
    return json_encode($mapa);
}
?>
toSerialize(): string → utiliza la función serialize(mixed)
Modifica todas las clases que no son abstractas para que implementen el interfaz creado.
*/

require_once 'JSerializable.php';
require_once '014Empleado.php';
require_once '014Gerente.php';

//Creamos la clase empresa
class Empresa implements JSerializable {
    
    protected array $trabajadores = [];

    public function __construct(
        protected string $nombre, 
        protected string $direccion) 
    { }

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

    //Creamos una funcion para mostrar todos los trabajadores
    public function listarTrabajadoresHtml(): string {
        $html = '<ul>';
        foreach ($this->trabajadores as $trabajador) {
            $html .= '<li>' . $trabajador->toHtml() . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }

    //Creamos una funcion para obtener todo el coste de las nominas
    public function getCosteNominas(): float {
        $costeTotal = 0.0;
        foreach ($this->trabajadores as $trabajador) {
            $costeTotal += $trabajador->calcularSueldo();
        }
        return $costeTotal;
    }

    //Creamos una funcion para pasar los datos a Json
    public function toJSON(): string {
        $mapa = [];
        foreach ($this as $clave => $valor) {
            if (is_object($valor)) {
                $mapa[$clave] = $this->convertirObjetoAArray($valor);
            } else {
                $mapa[$clave] = $valor;
            }
        }
        return json_encode($mapa);
    }
//Creamos una funcion recursiva para convertir el objeto en un array
    private function convertirObjetoAArray($objeto): array {
        $array = [];
        foreach ($objeto as $clave => $valor) {
            if (is_object($valor)) {
                $array[$clave] = $this->convertirObjetoAArray($valor);
            } else {
                $array[$clave] = $valor;
            }
        }
        return $array;
    }

    public function toSerialize(): string {
        return serialize($this);
    }
}

$empresa = new Empresa("Red Royal", "Calle Falsa 123");

$empleado = new Empleado("Juan", "Cutiño", 20, 15.0, 160);
$gerente = new Gerente("Samuel", "Castro", 35, 3000);

$empresa->anyadirTrabajador($empleado);
$empresa->anyadirTrabajador($gerente);

//Mostramos todos los datos
echo "Datos de la empresa en JSON: " . $empresa->toJSON() . "<br>";
echo "Datos de la empresa serializados: " . $empresa->toSerialize() . "<br>";



?>