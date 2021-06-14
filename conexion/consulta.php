<html>
    <head>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <td>No control</td>
                    <td>Nombre</td>
                    <td>edad</td>
                    <td>correo</td>
                    <td>modificar</td>
                    <td>eliminar</td>
                    <td>agregar nuevo dato</td>
                </tr>
            </thead>
<?php
    include 'conexion.php';
    $consulta ="SELECT * FROM al";
    $resultado=$conexion->query($consulta);
    while($row=$resultado->fetch_assoc()){
?>
    <tbody>
        <tr>
            <td><?php echo $row['nocontrol']; ?></td>
            <td><?php echo $row['nombre']; ?> </td>
            <td><?php echo $row['edad']; ?> </td>
            <!--<td><?php echo date("d/m/Y", strtotime($row['fecha_ini'])) ?> </td>-->
            <td><?php echo $row['correo']; ?> </td>
            <td><a href="actua.php?nocontrol=<?php echo $row['nocontrol']; ?>">Modificar</a></td>
            <td><a href="borrar.php?nocontrol=<?php echo $row['nocontrol']; ?>">Eliminar</a></td>
            <td><a href="registro.php">agregar</a></td>
        </tr>
    </tbody>
    <?php } ?>
        </table>
        <?php include 'desconexion.php';?>
    </body>
</html>