<?php include '019encabezado.php'; //Incluimos el encabezado ?>

<?php
if (isset($_POST['cantidad_productos'])) {
    $cantidad_productos = $_POST['cantidad_productos'];
?>

<h2>Lista de Compra</h2>

<ul>
    <?php //Creamos un bucle for que muestre en una lista  el producto y su coste en euros
    for ($i = 1; $i <= $cantidad_productos; $i++) {
        $nombreProducto = $_POST["producto_nombre_$i"];
        $costeProducto = $_POST["producto_coste_$i"];

        echo "<li>$nombreProducto: $costeProducto €</li>";
        
    }
    include '019pie.php'; //Incluimos el pie
    ?>
</ul>

<?php

} else {
    echo "<p>No se proporcionó la cantidad de productos en la URL.</p>";
}
?>