<?php
    include 'conexion.php';
    $nocontrol = $_REQUEST['nocontrol'];
    //$nocontrol = 15590728;
	//$nocontrol= $_POST['nocontrol'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    //echo $nocontrol.$nombre.$edad.$correo;
    echo $query ="UPDATE  al Set nombre='$nombre', edad='$edad', correo='$correo' where nocontrol='$nocontrol'";
    $query ="UPDATE  al Set nombre='$nombre', edad='$edad', correo='$correo' where nocontrol='$nocontrol'";
    $resultado = $conexion->query($query);
    if($conexion->query($query)=== true){
        echo "Registro modificado";?>
        <html>
        <head>
            <meta HTTP-EQUIV="REFRESH" content="0,consulta.php">
        </head>
        </html>
        <?php
    }else{
        echo "Error en la solicitud";   
    }
    include 'desconexion.php';
?>