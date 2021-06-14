<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location: ../login/login.php");
}else{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Grafica Ciudad</title>
		<style type="text/css">

		</style>
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
            <li class="nav-item"><a class="nav-link" href="../estadisticas">Sistemas Operativos<span class="sr-only">(current)</span></a></li>
            <li class="nav-item active"><a class="nav-link" href="../estadisticas/graficoc.php">Ciudades</a></li>
            <li class="nav-item"><a class="nav-link" href="../estadisticas/graficop.php">Paises</a></li>
        </ul>
            <span class="navbar-text">Usuario: <?php echo $_SESSION['session_username'];?>!...</span>
            <li><a href="../login/logout.php">Cerrar Seción</a></li>
        </div>
    </nav>

<script src="../Graficas/code/highcharts.js"></script>
<script src="../Graficas/code/highcharts-3d.js"></script>
<script src="../Graficas/code/modules/exporting.js"></script>
<script src="../Graficas/code/modules/export-data.js"></script>

<div id="container" style="height: 400px"></div>

<?php
include ("conexion.php");
$con = ("SELECT Ciudad,COUNT(SO) AS TotalC FROM `Navegador` GROUP BY Ciudad");
$resultado= $conexion->query($con);
?>
		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Ciudad'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Total de CIudades',
        data: [
		<?php
		while ($row = $resultado->fetch_assoc()){
			echo "['".$row["Ciudad"]."',".$row["TotalC"]."],";
			
		
             } ?>
        ]
    }]
});
        </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
<?php
}
?>