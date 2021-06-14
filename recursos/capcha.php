<?php
    $response_recaptcha= $_POST['g-recaptcha-response'];
    //echo $response_recaptcha;
    if(isset($response_recaptcha) && $response_recaptcha){
        $secret="6Lcnk3sUAAAAAOffGB8M1XKLIQAnR8UGnXPOtKvr";
        $ip=$_SERVER['REMOTE_ADDR'];
        $validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");

        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $asunto=$_POST['servicio'];
        $mensaje=$_POST['explicanos'];
        $hoy =date(d)."/".date(m)."/".date(y)." ".date(H).":".date(i).":".date(s);
        $destino="salo_zizu@hotmail.com";	
        
        $carta  ="Fecha: $hoy.\n";
        $carta .="De: $nombre.\n";
        $carta .= "Correo: $email \n\n";
        $carta .= "$mensaje";
    
        if(mail($destino, $asunto, $carta,'from:contacto@compi-soft.sytes.net')){
            header("location: ../paginas/contacto.html");
        }
    }
    else{
        //echo "no sirve";
        header("location: ../paginas/contacto.html ");
    }

    
?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>