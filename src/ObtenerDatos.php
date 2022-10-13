<?php
/**
 * @brief En este archivo se obtienen los datos de la base de datos
 */

//Incluimos el archivo de conexión a la base de datos
include '../src/bbdd.php';

/**
 * @brief Creamos la consulta para obtener los datos de la base de datos
 */
$consulta = "SELECT * FROM medidas";

/**
 * @brief Ejecutamos la consulta
 */
$resultado = mysqli_query($conexion, $consulta);

/**
 * @brief Creamos una tabla para mostrar los datos
 */
$s = '<table border="3">
    <thead>
        <tr>
            <th>UUID</th>
            <th>minor</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>';

/**
 * @brief Creamos un bucle para mostrar los datos
 */
while ($fila = mysqli_fetch_array($resultado)) {
    $s .= '<tr>
            <td>' . $fila['uuid'] . '</td>
            <td>' . $fila['minor'] . '</td>
            <td>' . $fila['fecha'] . '</td>
        </tr>';
}

/**
 * @brief Cerramos la conexión
 */
$s .= '</tbody>
</table>';

/**
 * @brief Mostramos la tabla
 */
echo $s;

?>