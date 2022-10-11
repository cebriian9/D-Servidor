<?php
$frase="emm alinear Azucar a su abuela";
$letras = array();  
$apariciones=array();


for ($i=0; $i < strlen($frase) ; $i++) { 
    
        if (in_array($frase[$i],$letras)==false) {
            $letras[]=$frase[$i];
            $apariciones[]=0;
        }
        $busqueda=array_search($frase[$i],$letras);
            $apariciones[$busqueda]++;
}

print_r($letras);
print("<br>");
print_r($apariciones);


?>