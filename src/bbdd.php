<?php
//Creamos las variables necesarias para la conexión
$hostname = 'localhost';
$database = 'sprint0';
$username = 'root';
$password = '';

//Creamos la conexión
$conexion = new mysqli($hostname, $username, $password, $database);
//Comprobamos si la conexión ha tenido éxito
if($conexion->connect_errno){
    echo "Error al conectar con la base de datos";
    exit();
}

?>




