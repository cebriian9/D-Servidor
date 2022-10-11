<?php
$frase="Bienvenido a la aventura de aprender php en 30 horas";

$pos=substr($frase,10,-6);
print("parte central de la cadena:  ".$pos."<br>");
print("<br>");


$pos=strpos($frase,"php");
print("Posicion de php: ".$pos."<br>");
print("<br>");


$pos=str_replace("aventura","<b>mision</b>",$frase);
print("Remplasacion: ".$pos."<br>");
print("<br>");



?>