<?php
//Incluimos el archivo de conexión a la base de datos
include 'bbdd.php';

//Creamos las variables que almacenarán los datos del formulario
$uuid = $_POST['uuid'];
$minor = $_POST['minor'];
$fecha = $_POST['fecha'];

//Creamos la consulta
$consulta_sql = "INSERT INTO medidas VALUES ('$uuid', '$minor', '$fecha')";
//Ejecutamos la consulta
mysqli_query($conexion, $consulta_sql) or die(mysqli_error());
//Cerramos la conexión
mysqli_close($conexion);

?>