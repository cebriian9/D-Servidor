<?php
$frase="HolA QUE asE";
$fraseModificada="";

$fraseModificada=strtr($frase,"aeiouAEIOU","AEIOUaeiou");

print($fraseModificada);


?>