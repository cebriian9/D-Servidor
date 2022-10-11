<?php 
$frase="despliegue de aplicaciones";
$espacios=0;
$corte=0;

$palabras2= strtok($frase, ' ').' '.strtok(' ');

print("Frase original: ".$frase."<br>");
print($palabras2    );
?>