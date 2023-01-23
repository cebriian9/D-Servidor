<?php
$alumnos = ["juan", "manolo", "pepe", "manolito", "mario"];



$ultimos = array_slice($alumnos, 3);

$primeros = array_splice($alumnos, 0,-2);




print(" <br>primeros 3: ");
foreach ($primeros as $alumno) {
    print("$alumno ");
}

print(" <br>ultimos 2: ");
foreach ($ultimos as $alumno ) {
    print("$alumno ");
}


?>