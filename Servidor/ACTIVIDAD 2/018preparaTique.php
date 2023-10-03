<?php
/*A partir de una cantidad de productos, leer el nombre y coste de la cantidad de productos indicados (la cantidad, se recibe mediante un parámetro GET vía URL).
018imprimeTique.php: Tras leer los datos del tique de compra, enumera en una tabla los productos, con su precio en euros y pesetas, y finalmente, en una última fila,
 totalizar en ambas monedas.
*/

if (isset($_GET['cantidad_productos'])) {
    $cantidadProductos = $_GET['cantidad_productos']; //Recogemos la cantidad de productos
?>

<form action="018imprimeTique.php" method="get"> 
    <input type="hidden" name="cantidad_productos" value="<?php echo $cantidadProductos; ?>">

    <?php
    // Generamos campos para cada producto y los enviamos
    for ($i = 1; $i <= $cantidadProductos; $i++) {
        echo "<label for='producto_nombre_$i'>Nombre del Producto $i:</label>";
        echo "<input type='text' name='producto_nombre_$i' required><br>";
        
        echo "<label for='producto_coste_$i'>Coste del Producto $i:</label>";
        echo "<input type='number' name='producto_coste_$i' step='0.01' required><br><br>";
    }
    ?>

    <input type="submit" value="Generar Tiquet">
</form>

<?php
} else {
    echo "<p>No se proporcionó la cantidad de productos en la URL.</p>";
}
?>

