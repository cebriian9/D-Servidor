<?php
$titulo="Pedazo titulo guapo";

crearCabecera($titulo);

function crearCabecera($titulo)
{
    print("
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>$titulo</title>
    </head>
    <body>
        <header>
            <h4>$titulo</h4>
        </header>
        <p>Que pedazo de pagina</p>
    </body>
    </html>
    ");
}
?>

