<?php

$frase="Esta cadena tiene muchas letras";

$pos=strpos($frase,"a");
print("Primera <b>a</b> en posicion: ".$pos."<br>");

$pos=strpos($frase,"m");
print("Primera <b>m</b> en posicion: ".$pos."<br>");

$pos=strpos($frase,"tiene");
print("Primera <b>tiene</b> en posicion: ".$pos."<br>");

$pos=strrpos($frase,"a");
print("Ultima <b>a</b> en posicion: ".$pos."<br>");


$pos=strpos($frase,"cadena");
$pos=substr($frase,$pos);
print("Frase desde <b>cadena</b>: ".$pos."<br>");

print("Partes de la cadena:<br>");
print("<br>");

$pos=substr($frase,12);
print("desde el 12 al final:  ".$pos."<br>");
print("<br>");

$pos=substr($frase,18,6);
print("6 caracteres desde el 18:  ".$pos."<br>");
print("<br>");

$pos=substr($frase,-6);
print("6 ultimos:  ".$pos."<br>");
print("<br>");

$pos=substr($frase,-26,6);
print("posicion 26, empezando desde atras, 6 caracteres:  ".$pos."<br>");
print("<br>");

$pos=substr($frase,4,-7);
print("empezando desde el caracter 4 y terminando 7 desde atras:  ".$pos."<br>");
?>