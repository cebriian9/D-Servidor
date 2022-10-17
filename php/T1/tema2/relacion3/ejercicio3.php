<?php
$frase="hl cr cl";

if (preg_match('/[aeiouáéíóú]/i',$frase)) {
    print( "hay vocal");
} else {
    print("no hay vocal");
}

?>