<?php
/*19.A partir de los archivos creados en el ejercicio anterior, crea una plantilla mediante includes:
019preparaCompra.php: similar a 019preparaTique.php, pero separando el encabezado (Supermercado Lodi en h1)
y el pie (Tu supermercado de confianza) en ficheros externos y referenciando a ellos mediante include.
019listaCompra.php: recibe los datos del anterior, y reutiliza parte de 019imprimeTiquetCompra.php cambiando
 la tabla por una lista desordenada de los productos junto a su precio.
 */
 include '019encabezado.php';

 if (isset($_GET['cantidad_productos'])) {
    $cantidad_productos = $_GET['cantidad_productos'];
 ?>

    <form action="019listaCompra.php" method="post">
    <input type="hidden" name="cantidad_productos" value="<?php echo $cantidad_productos; ?>">

    <?php
    // Generar campos para cada producto
    for ($i = 1; $i <= $cantidad_productos; $i++) {
        echo "<label for='producto_nombre_$i'>Nombre del Producto $i:</label>";
        echo "<input type='text' name='producto_nombre_$i' required><br>";
        
        echo "<label for='producto_coste_$i'>Coste del Producto $i:</label>";
        echo "<input type='number' name='producto_coste_$i' step='0.01' required><br><br>";
    }
    ?>

    <input type="submit" value="Generar Lista">
</form>
<?php
} else {
    echo "<p>No se proporcionó la cantidad de productos en la URL.</p>";
}
?>

<?php include '019pie.php'; ?>