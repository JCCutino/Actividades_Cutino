<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>
<body>
    <form action="validar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        
        <label for="cuenta">Número de cuenta bancaria:</label>
        <input type="text" id="cuenta" name="cuenta">
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>