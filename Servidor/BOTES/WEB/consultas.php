<?php
include_once("conexion.php");


function listarBatallaGuadalcanal($conexion) {
   
  
    $sql = "SELECT B.NOMBRE_BARCO, C.DESPLAZAMIENTO, C.NRO_CANIONES
            FROM BARCOS AS B
            JOIN BARCO_CLASE AS BC ON B.NOMBRE_BARCO = BC.NOMBRE_BARCO
            JOIN CLASES AS C ON BC.CLASE = C.CLASE
            WHERE B.NOMBRE_BARCO IN (
                SELECT NOMBRE_BARCO
                FROM RESULTADOS
                WHERE NOMBRE_BATALLA = 'Guadalcanal'
            )";


    $resultado = $conexion->query($sql);


    $tablaHTML = "<table border='2'>
                    <tr>
                        <th>Nombre del Barco</th>
                        <th>Desplazamiento</th>
                        <th>Cantidad de Cañones</th>
                    </tr>";
    foreach ($resultado as $fila) {
        $tablaHTML .= "<tr>
                        <td>".$fila['NOMBRE_BARCO']."</td>
                        <td>".$fila['DESPLAZAMIENTO']."</td>
                        <td>".$fila['NRO_CANIONES']."</td>
                    </tr>";
    }
    $tablaHTML .= "</table>";


   
    return $tablaHTML;
}

function encontrarPaisesConAcorazadosYCruceros($conexion) {

    $sql = "SELECT DISTINCT C.PAIS
            FROM CLASES AS C
            WHERE C.TIPO = 'ACORAZADO'
            AND C.PAIS IN (
                SELECT DISTINCT C2.PAIS
                FROM CLASES AS C2
                WHERE C2.TIPO = 'CRUCERO'
            )";

   
    $resultado = $conexion->query($sql);

    
    $tablaHTML = "<table border='2'>
                    <tr>
                        <th>País</th>
                    </tr>";
    foreach ($resultado as $fila) {
        $tablaHTML .= "<tr>
                        <td>".$fila['PAIS']."</td>
                    </tr>";
    }
    $tablaHTML .= "</table>";

   
    return $tablaHTML;
}


function encontrarBatallasConTresBarcosDelMismoPais($conexion) {
   
    $sql = "SELECT R.NOMBRE_BATALLA, C.PAIS, COUNT(*) AS NUMERO_DE_BARCOS
    FROM CLASES AS C
    JOIN RESULTADOS AS R ON C.CLASE = (SELECT CLASE FROM BARCO_CLASE WHERE NOMBRE_BARCO = R.NOMBRE_BARCO)
    GROUP BY R.NOMBRE_BATALLA, C.PAIS
    HAVING COUNT(*) >= 3";
            


    
    $resultado = $conexion->query($sql);

  
    $tablaHTML = "<table border='2'>
                    <tr>
                        <th>Nombre de la Batalla</th>
                        <th>País</th>
                        <th>Cantidad de Barcos</th>
                    </tr>";
    foreach ($resultado as $fila) {
        $tablaHTML .= "<tr>
                        <td>".$fila['NOMBRE_BATALLA']."</td>
                        <td>".$fila['PAIS']."</td>
                        <td>".$fila['NUMERO_DE_BARCOS']."</td>
                    </tr>";
    }
    $tablaHTML .= "</table>";



    return $tablaHTML;
    
}


function encontrarPaisesConMasCaniones($conexion) {
   
    $sql = "SELECT C.PAIS, MAX(C.NRO_CANIONES) AS MaxCaniones
            FROM CLASES AS C
            GROUP BY C.PAIS
            HAVING MAX(C.NRO_CANIONES) = (SELECT MAX(NRO_CANIONES) FROM CLASES)";

   
    $resultado = $conexion->query($sql);

    
    $tablaHTML = "<table border='1'>
                    <tr>
                        <th>País</th>
                        <th>Cantidad Máxima de Cañones</th>
                    </tr>";
    foreach ($resultado as $fila) {
        $tablaHTML .= "<tr>
                        <td>".$fila['PAIS']."</td>
                        <td>".$fila['MaxCaniones']."</td>
                    </tr>";
    }
    $tablaHTML .= "</table>";



    return $tablaHTML;
}


function encontrarBatallaClaseKongo($conexion) {
   
    $sql = "SELECT DISTINCT RESULTADOS.NOMBRE_BATALLA
    FROM RESULTADOS
    INNER JOIN BARCO_CLASE ON RESULTADOS.NOMBRE_BARCO = BARCO_CLASE.NOMBRE_BARCO
    INNER JOIN CLASES ON BARCO_CLASE.CLASE = CLASES.CLASE
    WHERE CLASES.CLASE = 'KONGO'";

   
    $resultado = $conexion->query($sql);

    
    $tablaHTML = "<table border='1'>
                    <tr>
                        <th>Nombre Batalla</th>
                    </tr>";
    foreach ($resultado as $fila) {
        $tablaHTML .= "<tr>
                        <td>".$fila['NOMBRE_BATALLA']."</td>
                    </tr>";
    }
    $tablaHTML .= "</table>";



    return $tablaHTML;
}


?>