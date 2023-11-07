<?php
session_start();

if(isset($_SESSION['contador'])){
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
    $mensaje = 'Numero de visitas: '.$_SESSION['contador'];
}else{
    $_SESSION['contador'] = 1;
    $mensaje = 'Bienvenido a nuestra pagina web';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Sesion</title>
</head>
<body>
    
<p>
    <?php
    echo ($mensaje);
    ?>
</p>
</body>
</html>