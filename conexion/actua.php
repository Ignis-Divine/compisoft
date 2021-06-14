<?php
	include 'conexion.php';
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$nocontrol=$_REQUEST['nocontrol'];
	$consulta= "SELECT * FROM al where nocontrol='$nocontrol'";
	$resultado=$conexion->query($consulta);
	$row=$resultado->fetch_assoc();
	echo $nocontrol;
?>
<!Doctype>
		<html>
			<body background="green">
				<center>
				<h1>Formulario
				<br><hr>
				<form method = "post" action="actualizar.php?nocontrol=<?php echo $row['nocontrol'] ?>">
					<label>No Control: </label>
					<input type="number" name="nocontrol"  disabled value=<?php echo $nocontrol; ?> required/><br>
					<label>correo: </label>
					<input type="email" name="correo" id="correo" required/><br>
					<label>Nombre: </label>
					<input type="text" name="nombre" id="nombre" required/><br>
					<label>edad: </label>
					<input type="number" name="edad" id="edad" required/><br>
					<br><hr>
					<input type="submit" value="Actualizar datos">
				</form>
				<hr>
				</h1>
				</center>
			</body>
		</html>