<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje2</title>
</head>

<body>
    <h3>Elementos de entrada</h3>

    <form action="eje2R.php" method="get">

        <label for="texto"><b>Texto</b></label>
        <input type="text" name="texto" id="texto">
        <br><br>

        <label for="radio"><b>Radio</b></label>
        <input type="radio" name="sexo" value="hombre">hombre
        <input type="radio" name="sexo" value="mujer">mujer
        <input type="radio" name="sexo" value="bolsa del mercadona">bolsa del mercadona
        <br><br>

        <label for="chek"><b>Chekbox</b></label>
        <input type="checkbox" name="extra" id="garaje" value="garaje">garaje
        <input type="checkbox" name="extra" id="piscina" value="piscina">piscina
        <input type="checkbox" name="extra" id="gym" value="gym">gym
        <br><br>

        <label for="file"><b>archivo</b></label>
        <input type="file" id="file" name="file">
    </form>
</body>

</html>