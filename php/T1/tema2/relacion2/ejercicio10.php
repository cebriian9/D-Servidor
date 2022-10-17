<?php

print("Texto literal: <br>");

$frase="<a href= \"/arbol/prueba.php\" class=\"prueba\" onmouseOver=\"status='hola';
return trae;\">pruebade\\enlace</a>";

print(htmlentities($frase));

?>
