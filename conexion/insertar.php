<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    include 'conexion.php';

    $nocontrol= $_POST['nocontrol'];
    $nombre = $_POST['name'];
    $edad = $_POST['edad'];
    $correo = $_POST['email'];

    $consulta = "INSERT INTO al(nocontrol, nombre, edad, correo) values('$nocontrol', '$nombre', '$edad', '$correo')";
    echo $id.$nombre.$edad.$correo;
    $resultado =$conexion ->query($consulta);
    if($conexion->query($consulta)=== true){
        //echo "Registro modificado";
        echo "Error en la solicitud";
    }else{
        echo "Registro agregado";?>
        <html>
        <head>
            <meta HTTP-EQUIV="REFRESH" content="0,consulta.php">
        </head>
        </html>
 <?php       
    }
    include 'desconexion.php';
?>