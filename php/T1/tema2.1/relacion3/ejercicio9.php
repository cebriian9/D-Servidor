<?php
$frase="hola amigos";

$fraseModificada=addcslashes($frase,"/[eiou]/");

print($fraseModificada."<br>");

$fraseModificada=stripcslashes($fraseModificada);

print($fraseModificada);

?>