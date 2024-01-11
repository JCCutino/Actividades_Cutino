<?php

session_start();

session_destroy();

session_start();
$pedido = true;

$_SESSION['resultOrder'] = $pedido;


header("Location: " . $_SERVER["HTTP_REFERER"]);
exit();
?>