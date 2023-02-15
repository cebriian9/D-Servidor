<?php


@$conexion = new mysqli('localhost', 'dwes', 'abc123.', 'inmobiliaria');
$error = $conexion->connect_errno;
if ($error != null) {
    echo "Error $error conectando a la base de datos: $conexion->connect_error";
    exit();
}
echo "<h1>Conexión realizada correctamente</h1>";

$resultado = $conexion->query('SELECT * FROM noticias');
while ($fila = $resultado->fetch_array()) {
    echo ("<tr>");
    for ($i = 0; $i < 5; $i++) {
        echo ("<td>");
        echo ($fila[$i]);
        echo ("</td>");
    }
    echo ("</tr>");
}
