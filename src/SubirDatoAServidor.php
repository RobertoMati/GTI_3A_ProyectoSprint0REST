<?php
/**
 * @brief En este archivo se sube la información de la base de datos a un servidor
 */

 //Incluimos el archivo de conexión a la base de datos
include '../src/bbdd.php';


/**
 * @brief Creamos las variables que almacenarán los datos del formulario
 * @param $uuid
 * @param $minor
 * @param $fecha
 */
$uuid = $_POST['uuid'];
$minor = $_POST['minor'];
$fecha = $_POST['fecha'];

/**
 * @brief Creamos la consulta para insertar los datos en la base de datos
 */
$consulta_sql = "INSERT INTO medidas VALUES ('$uuid', '$minor', '$fecha')";

/**
 * @brief Ejecutamos la consulta
 */
mysqli_query($conexion, $consulta_sql) or die(mysqli_error());

/**
 * @brief Cerramos la conexión
 */
mysqli_close($conexion);

?>