<?php
$frase1="hola 90";
$frase2="hola 9";

if (strnatcasecmp(substr($frase1, 0,6),substr($frase2, 0,6))==0) {
    print("Son iguales");
}elseif (strnatcasecmp(substr($frase1, 0,6),substr($frase2, 0,6))<0) {
    print("Frase 2 es mas larga");
} else {
    print("Frase 1 es mas larga");
}



?>