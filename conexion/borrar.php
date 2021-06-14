<?php
    include 'conexion.php';
    $nocontrol=$_REQUEST['nocontrol'];
    $consulta = "DELETE FROM al where nocontrol='$nocontrol'";
    $resultado=$conexion->query($consulta);

    if($resultado){
        echo "registro eliminado";
        echo $nocontrol;
        header("localizacion: consulta.php");
        ?>
        <html>
        <head>
            <meta HTTP-EQUIV="REFRESH" content="0,consulta.php">
        </head>
        </html>
 <?php  
    }else{
        echo "vales madres y no se elimino >:v";
    } 
?>