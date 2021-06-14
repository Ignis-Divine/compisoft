<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location: ../login/login.php");
}else{
?>
<!DOCTYPE HTML>
<html>
	<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Grafica SO</title>
	</head>
	<body>

<script src="../Graficas/code/highcharts.js"></script>
<script src="../Graficas/code/highcharts-3d.js"></script>
<script src="../Graficas/code/modules/exporting.js"></script>
<script src="../Graficas/code/modules/export-data.js"></script>

<div id="container" style="height: 400px background: #191735"></div>
<?php
include ("conexion.php");
$con = ("SELECT SO,COUNT(SO) AS Cantidad FROM `Navegador` GROUP BY SO");
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
        text: 'Sistemas Operativos'
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
        name: 'Total de SO',
        data: [
		<?php
		while ($row = $resultado->fetch_assoc()){
			echo "['".$row["SO"]."',".$row["Cantidad"]."],";
			
		
             } ?>
        ]
    }]
});
		</script>
	</body>
</html>
<?php
}
?>