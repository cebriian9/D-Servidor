<?php
$frase="HolA QUE asE";
$fraseModificada="";

for ($i=0; $i < strlen($frase); $i++) { 
    $char=substr($frase,$i,1);

    if (preg_match('/[aeiouáéíóú]/',$char)) {
        $char=strtoupper($char);

    }elseif (preg_match('/[AEIOUÁÉÍÓÚ]/',$char)) {
        $char=strtolower($char);
    }
    $fraseModificada=($fraseModificada.$char);
}

print($fraseModificada);


?>