<?php
require("constants.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//conexion                 nombre host   user         tabla
    $conexion = new mysqli(DB_SERVER,DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($conexion, "utf8");
?>
