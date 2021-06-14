<?php
//obteniendo el 'user_agent':
//
if ( isset( $_SERVER ) ) {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
} else {
    global $HTTP_SERVER_VARS;
    if ( isset( $HTTP_SERVER_VARS ) ) {
        $user_agent = $HTTP_SERVER_VARS['HTTP_USER_AGENT'];
    } else {
        global $HTTP_USER_AGENT;
        $user_agent = $HTTP_USER_AGENT;
    }
}
?>



<?php
$ip=include('ip.php');
<a href="http://www.maxmind.com"></a>
<?php
echo ($ip);
$Pais = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=$ip'));?>
      <br> 
      Latitud: <span style="color:#FF00AA;"><?php echo $Pais['geoplugin_latitude']; ?></span>
	  <input id="lat" type="hidden" value="<?php echo $Pais['geoplugin_latitude']; ?>">
      <br>
      Longitud: <span style="color:#FF00AA;"><?php echo $Pais['geoplugin_longitude']; ?></span>
	  <input id="lng" type="hidden" value="<?php echo $Pais['geoplugin_longitude']; ?>">
      <br>
      Ciudad: <span style="color:#FF00AA;"><?php echo $Pais['geoplugin_city']; ?></span>
      <br>
      Región: <span style="color:#FF00AA;"><?php echo $Pais['geoplugin_region']; ?></span>
      <br>
      <strong>Pais: </strong><?php echo $Pais['geoplugin_countryName']; ?></span>
      <br><br>
      Código País: <span style="color:#FF00AA;"><?php echo $Pais['geoplugin_countryCode']; ?></span>
      <br>
      Código Continente: <span style="color:#FF00AA;"><?php echo $Pais['geoplugin_continentCode']; ?></span>
 <?php
 $pais=$Pais['geoplugin_countryName'];
 $ciudad=$Pais['geoplugin_city'];
 ?>
<?php
//echo gethostbyaddr($Equipo['SERVER_ADDR']);
 ?>
<html>
<br><br>
<strong><a>Hora de Conexion: </a></strong>
</html>
<?php
$Hora_I = date('H').":".date('i').":".date('s');
//echo $Hora_I;
?>
<br><br>
<html>
<strong><a>Fecha: </a></strong>
</html>
<?php
$Fecha = date('y')."/".date('m')."/".date('d');
//echo $Fecha;
?>
<br><br>
<?php

function getOS() { 
    global $user_agent;
    $os_array =  array(
                    '/windows nt 10/i'      =>  'Windows 10',
                    '/windows nt 6.3/i'     =>  'Windows 8.1',
                    '/windows nt 6.2/i'     =>  'Windows 8',
                    '/windows nt 6.1/i'     =>  'Windows 7',
                    '/windows nt 6.0/i'     =>  'Windows Vista',
                    '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                    '/windows nt 5.1/i'     =>  'Windows XP',
                    '/windows xp/i'         =>  'Windows XP',
                    '/windows nt 5.0/i'     =>  'Windows 2000',
                    '/windows me/i'         =>  'Windows ME',
                    '/win98/i'              =>  'Windows 98',
                    '/win95/i'              =>  'Windows 95',
                    '/win16/i'              =>  'Windows 3.11',
                    '/macintosh|mac os x/i' =>  'Mac OS X',
                    '/mac_powerpc/i'        =>  'Mac OS 9',
                    '/linux/i'              =>  'Linux',
                    '/ubuntu/i'             =>  'Ubuntu',
                    '/iphone/i'             =>  'iPhone',
                    '/ipod/i'               =>  'iPod',
                    '/ipad/i'               =>  'iPad',
                    '/android/i'            =>  'Android',
                    '/blackberry/i'         =>  'BlackBerry',
                    '/webos/i'              =>  'Mobile'
                  );
    //
    $os_platform = "Unknown OS Platform";
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }
    return $os_platform;
}
$SO        =   getOS();
$device_details =   "<strong>Sistema Operativo: </strong>" . $SO;

print_r($device_details);


?>
<?php

//Insertar
include 'conexion.php';
$consulta = "INSERT INTO Navegador(SO, Hora_I, Fecha, Pais, Ciudad) VALUES ('$SO','$Hora_I','$Fecha','$pais','$ciudad')";
$resultado =$conexion ->query($consulta);
//echo $SO.$Hora_I.$pais;
    if($conexion->query($consulta)=== true){
        //echo "Registro modificado";
        echo "Error en la solicitud";
    }else{
		?>
		<br> <br>
        <?php echo "Registro agregado";?>
 <?php       
    }
    include 'desconexion.php';
?>

     


