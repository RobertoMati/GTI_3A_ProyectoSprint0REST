<?php

//Incluimos el archivo de conexión a la base de datos
include '../src/bbdd.php';

//Obtener la información de la tabla de la base de datos
$consulta = "SELECT * FROM medidas";
//Ejecutamos la consulta
$resultado = mysqli_query($conexion, $consulta);

$s = '<table border="3">
    <thead>
        <tr>
            <th>UUID</th>
            <th>minor</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>';

//Recorremos el resultado de la consulta
while ($fila = mysqli_fetch_array($resultado)) {
    $s .= '<tr>
            <td>' . $fila['uuid'] . '</td>
            <td>' . $fila['minor'] . '</td>
            <td>' . $fila['fecha'] . '</td>
        </tr>';
}

$s .= '</tbody>

</table>';

echo $s;

?>