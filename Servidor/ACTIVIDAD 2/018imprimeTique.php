<?php
/*018preparaTique.php: A partir de una cantidad de productos, leer el nombre y coste de la cantidad de productos indicados (la cantidad, se recibe mediante un parámetro GET vía URL).
018imprimeTique.php: Tras leer los datos del tique de compra, enumera en una tabla los productos, con su precio en euros y pesetas, y finalmente, en una última fila, totalizar en ambas monedas.
 */

 

if (isset($_GET['cantidad_productos'])) {
    $cantidadProductos = $_GET['cantidad_productos'];

   
    $totalEuros = 0;
    $totalPesetas = 0;

  
    echo "<table border='1'>";
    echo "<tr><th>Producto</th><th>Precio (Euros)</th><th>Precio (Pesetas)</th></tr>";

  
    for ($i = 1; $i <= $cantidadProductos; $i++) {
     
        $nombreProducto = $_GET["producto_nombre_$i"];
        $costeProducto = $_GET["producto_coste_$i"];

    
        $precioPesetas = $costeProducto * 166.386;

   
        $totalEuros += $costeProducto;
        $totalPesetas += $precioPesetas;

        
        echo "<tr>";
        echo "<td>$nombreProducto</td>";
        echo "<td>$costeProducto €</td>";
        echo "<td>$precioPesetas Pts</td>";
        echo "</tr>";
    }


    echo "<tr><td colspan='3'><strong>Total</strong></td></tr>";
    echo "<tr><td colspan='2'>Total en Euros</td><td>$totalEuros €</td></tr>";
    echo "<tr><td colspan='2'>Total en Pesetas</td><td>$totalPesetas Pts</td></tr>";

    echo "</table>";
} else {
    echo "<p>No se proporcionó la cantidad de productos.</p>";
}

?>