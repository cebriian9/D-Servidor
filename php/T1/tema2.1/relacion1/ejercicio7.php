<?php
$frase="hola pepe";

for ($i=0; $i < strlen($frase); $i++) { 
    echo str_repeat($frase[$i],2);
}
?>