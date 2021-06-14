<?php
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$asunto=$_POST['servicio'];
	$mensaje=$_POST['explicanos'];
	$hoy =date(d)."/".date(m)."/".date(y)." ".date(H).":".date(i).":".date(s);
    $destino="salo_zizu@hotmail.com";	
    
    $carta  ="Fecha: $hoy.\n";
    $carta .="De: $nombre.\n";
    $carta .= "Correo: $email \n";
    $carta .= "$mensaje";

    if(mail($destino, $asunto, $carta,'from:contacto@compi-soft.sytes.net')){
        //header("location:/");
    }
?>	