<?php

function calculaCantidad($años,$aportacion,$interes){
    floatval($resultado)=$aportacion+0.00;
    for ($i=0; $i < $años; $i++) { 
        $resultado+=($aportacion*$interes/100);
    }
    return $resultado;
}

$interes=5;
echo "<p><b>El interés actual es $interes%.</b></p>" ;
echo " <p>Si usted deposita 100 &#x20AC; hoy, sus ahorros crecerán a " ;
echo calculaCantidad(5 , 100,$interes) ;
echo "&#x20AC; en 5 años.</p>" ;
echo " <p>Si usted deposita 1.500&#x20AC; hoy, sus ahorros crecerán a " ;
echo calculaCantidad(20 , 1500,$interes) ;
echo "&#x20AC; después de 20 años.</p>" ;
?>