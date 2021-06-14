<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location: ../login/login.php");
}else{
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="../recursos/img/controlar.png">
    <title>Estadisticas</title>
</head>
<body>
  <nav class="navbar justify-content-end navbar-expand-lg navbar-dark bg-dark">
    <a href="/"> <img src="../recursos/img/controlar.png" alt="Compi-Soft" style="padding-right: 10px"></a>
    <a class="navbar-brand" href="/">Compi-Soft</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>        
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="../estadisticas">Sistemas Operativos<span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="../estadisticas/graficoc.php">Ciudades</a></li>
        <li class="nav-item"><a class="nav-link" href="../estadisticas/graficop.php">Paises</a></li>
      </ul>
        <span class="navbar-text">Usuario: <?php echo $_SESSION['session_username'];?>!...</span>
        <li><a href="../login/logout.php">Cerrar Seción</a></li>
    </div>
  </nav>

    <?php include ("grafico.php"); ?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>