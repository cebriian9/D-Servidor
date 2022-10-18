<?php
$frase1="hola 9";
$frase2="hola 10";

if (strcasecmp($frase1,$frase2,5)) {
    print("Frase 2 es mas larga");
} else {
    print("Frase 1 es mas larga");
}

?>