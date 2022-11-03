<?php
$tel="654 65 65 65";

if (preg_match("/^[0-9]{3} [0-9]{2} [0-9]{2} [0-9]{2}$/",$tel) && preg_match("/^[6789]/",$tel)) {
    print("El numero es correcto");
}else{
    print("El numero NO es correcto");
}
?>