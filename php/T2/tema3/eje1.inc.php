<?php


@$conexion = new mysqli('localhost', 'dwes', 'abc123.', 'dwes');
$error = $conexion->connect_errno;
if ($error != null) {
    echo "Error $error conectando a la base de datos: $conexion->connect_error";
    exit();
}
echo "<h1>Conexión realizada correctamente</h1>";

$result= $dwes -> query;
