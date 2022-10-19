<?php
$frase="vamos al o'Brian";
$frase=addslashes($frase);

print($frase."<br>");

$frase=stripcslashes($frase);

print($frase);
?>