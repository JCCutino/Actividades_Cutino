<?php
/*018preparaTique.php: A partir de una cantidad de productos, leer el nombre y coste de la cantidad de productos indicados (la cantidad, se recibe mediante un parámetro GET vía URL).
018imprimeTique.php: Tras leer los datos del tique de compra, enumera en una tabla los productos, con su precio en euros y pesetas, y finalmente, en una última fila, totalizar en ambas monedas.
 */

 

if (isset($_GET['cantidad_productos'])) {
    $cantidadProductos = $_GET['cantidad_productos']; //Recogemos la cantidad de productos

   
    $totalEuros = 0;
    $totalPesetas = 0;

  //Iniciamos una tabla
    echo "<table border='1'>";
    echo "<tr><th>Producto</th><th>Precio (Euros)</th><th>Precio (Pesetas)</th></tr>";

  
    for ($i = 1; $i <= $cantidadProductos; $i++) {
     //En un bucle for vamos mostrando todos los productos creados anteriormente
        $nombreProducto = $_GET["producto_nombre_$i"];
        $costeProducto = $_GET["producto_coste_$i"];

    
        $precioPesetas = $costeProducto * 166.386; //Convertimos el precio a pesetas

   
        $totalEuros += $costeProducto; //Lo vamos almacenando
        $totalPesetas += $precioPesetas;

        
        echo "<tr>";
        echo "<td>$nombreProducto</td>";
        echo "<td>$costeProducto €</td>";
        echo "<td>$precioPesetas Pts</td>"; //Mostramos el nombre y los precios
        echo "</tr>";
    }


    echo "<tr><td colspan='3'><strong>Total</strong></td></tr>";
    echo "<tr><td colspan='2'>Total en Euros</td><td>$totalEuros €</td></tr>"; //Mostramos el total de euros y de pesetas
    echo "<tr><td colspan='2'>Total en Pesetas</td><td>$totalPesetas Pts</td></tr>";

    echo "</table>"; //Cerramos la tabla
} else {
    echo "<p>No se proporcionó la cantidad de productos.</p>";
}

?>