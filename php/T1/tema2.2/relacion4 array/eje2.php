<?php
$alumnos = ["juan", "manolo", "pepe", "manolito", "mario"];



//$ultimos = array_slice($alumnos, 3);

$primeros = array_splice($alumnos, 3);



print(" <br>primeros: ");
foreach ($primeros as $alumno) {
    print("$alumno ");
}


?>