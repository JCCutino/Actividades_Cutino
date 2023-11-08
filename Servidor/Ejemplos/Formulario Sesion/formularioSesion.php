<?php
session_start(); 

if (isset($_SESSION['sesion_creada'])) {
    $mensaje = 'Bienvenido ' .$_SESSION['nombre'];
} else if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['correo']) && isset($_POST['contrasena'])) {
  
    if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['contrasena'])) {
       
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['apellidos'] = $_POST['apellidos'];
        $_SESSION['correo'] = $_POST['correo'];
        $_SESSION['contrasena'] = $_POST['contrasena'];

        $_SESSION['sesion_creada'] = true;
        $mensaje = 'La sesión ha sido creada';

    } else {
        $mensaje = 'Por favor, rellena todos los campos del formulario.';
    }
}else{
    $mensaje = 'La sesión no ha sido creada';
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<form action="" method="post">

<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre">
<br>

<label for="apellidos">Apellidos</label>
<input type="text" name="apellidos" id="apellidos">
<br>

<label for="correo">Correo</label>
<input type="text" name="correo" id="correo">
<br>

<label for="contrasena">Contraseña</label>
<input type="password" name="contrasena" id="contrasena">
<br>
<br>
<input type="submit" value="Enviar">
<input type="reset" value="Borrar">

<br>
<?php
echo $mensaje;
?>

</form>
</body>
</html>
