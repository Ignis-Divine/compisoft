<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//conexion                 nombre host   user     contraseña   base de datos
    $conexion = new mysqli("localhost", "c8Adrian", "CompiSoft1243", "c8Estadisticas");
    mysqli_set_charset($conexion, "utf8");
?>

