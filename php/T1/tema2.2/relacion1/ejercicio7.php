<?php
$numero=2;
print("nuemero: $numero<br>");
cuadrado($numero);
cubo($numero);

function cuadrado($numero)
{
    $resultado=pow($numero,2);

    print("cuadrado: $resultado<br>");
}

function cubo($numero)
{
    $resultado=pow($numero,3);
    
    print("cubo: $resultado");
}
?>