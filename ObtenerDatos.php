<?php

//Incluimos el archivo de conexión a la base de datos
include 'bbdd.php';

//Obtener la información de la tabla de la base de datos
$consulta = "SELECT * FROM medidas";
//Ejecutamos la consulta
$resultado = mysqli_query($conexion, $consulta);

//Creamos un array para almacenar los datos
//Mientras haya datos en la tabla, los almacenamos en el array
while($fila = mysqli_fetch_array($resultado)){
    //Almacenamos los datos en el array
    $datos[] = array(
        'uuid' => $fila['uuid'],
        'minor' => $fila['minor'],
        'fecha' => $fila['fecha']
    );
    
}
?>