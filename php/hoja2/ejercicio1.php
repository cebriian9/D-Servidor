<?php
/* Realiza una página PHP en la que introduzca dos palabras en dos variables y diga si riman o no.
Si coinciden las tres últimas letras tiene que decir que riman. Si coinciden sólo las dos últimas
tiene que decir que riman un poco y si no, que no riman. Recuerda que las palabras rimarán
independientemente de que se escriban con mayúsculas o minúsculas */
$cad1 ="veo un camion";
$cad2 ="veo un avion";



if (str_ends_with($cad1,substr($cad2,-3)) ) {
    echo 'diuuu que buena rima';
}else{
    echo 'Tus rimas no molan';
}

?>