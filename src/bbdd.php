<?php
/**
 * @brief En este archivo se crea la conexión a la base de datos
 * @param $hostname
 * @param $username
 * @param $password
 * @param $database
 */
$hostname = 'localhost';
$database = 'sprint0';
$username = 'root';
$password = '';

/**
 * @brief Creamos la conexión
 */
$conexion = new mysqli($hostname, $username, $password, $database);

/**
 * @brief Comprobamos la conexión
 */
if($conexion->connect_errno){
    echo "Error al conectar con la base de datos";
    exit();
}

?>




