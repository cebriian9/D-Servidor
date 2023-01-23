<form action="ejercicio2.php">
    <p>Introduce el nombre del pais</p>
    <input type="text" name="pais" id="pais">
    <p>Introduce el nombre de la ciudad</p>
    <input type="text" name="ciudad" id="ciudad">
    <p>Introduce el numero de habitantes</p>
    <input type="number" name="habitantes" id="habitantes">
    <input type="submit" value="Enviar">
</form>

<?php

    $pais=$_GET['pais'];
    $pais=trim($pais);

    $ciudad=$_GET['ciudad'];

    $ciudad=trim($ciudad," ");

    $habitantes=$_GET['habitantes'];

    mostrarDatos($pais,$ciudad,$habitantes);

    function mostrarDatos($pais,$ciudad,$habitantes)
    {
        if ($ciudad=="") {
            $ciudad="Madrid";
        }
    
        if ($habitantes=="") {
            $habitantes="Muchos";
        }
    
        if ($pais!=null || $pais!="") {
            echo("La capital de ".$pais." es ".$ciudad." y tiene ".$habitantes." habitantes");
        }
    }
?>