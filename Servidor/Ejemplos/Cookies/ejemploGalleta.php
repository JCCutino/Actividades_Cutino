<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo galleta</title>
</head>
<body>
    
<?php
if(isset($_COOKIE['contador'])){
    setcookie('contador',$_COOKIE['contador']+1,time() + 365 *24 * 60* 60);
    $mensaje = 'Número de visitas:' . $_COOKIE['contador'];
}else{
    setcookie('contador', 1,time() + 365 *24 * 60* 60);
    $mensaje = 'Bienvenido a nuestra pagina web';
}


?>

<p>
    <?php
    echo ($mensaje);
    ?>
</p>




</body>
</html>